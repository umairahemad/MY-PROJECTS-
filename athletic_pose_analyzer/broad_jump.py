# broad_jump.py
import cv2
import mediapipe as mp
import numpy as np

def analyze_broad_jump(video_path):
    cap = cv2.VideoCapture(video_path)
    mp_pose = mp.solutions.pose
    baseline_x = None
    peak_x = None
    jump_distances = []
    stage = "waiting"
    SMOOTHING_WINDOW = 5
    DIST_THRESHOLD = 0.01
    HISTORY_LEN = 5
    reference_width_cm = 200
    x_history = []

    def smooth(values):
        if len(values) < SMOOTHING_WINDOW:
            return np.mean(values)
        return np.mean(values[-SMOOTHING_WINDOW:])

    with mp_pose.Pose(min_detection_confidence=0.5, min_tracking_confidence=0.5) as pose:
        while cap.isOpened():
            ret, frame = cap.read()
            if not ret:
                break
            image = cv2.cvtColor(frame, cv2.COLOR_BGR2RGB)
            image.flags.writeable = False
            results = pose.process(image)
            image.flags.writeable = True

            if results.pose_landmarks:
                left_hip = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_HIP].x
                right_hip = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_HIP].x
                avg_x = (left_hip + right_hip) / 2
                x_history.append(avg_x)
                if len(x_history) > HISTORY_LEN:
                    x_history.pop(0)
                avg_x_smoothed = smooth(x_history)

                if baseline_x is None:
                    baseline_x = avg_x_smoothed

                if stage == "waiting" and (avg_x_smoothed - baseline_x) > DIST_THRESHOLD:
                    start_x = baseline_x
                    peak_x = avg_x_smoothed
                    stage = "jumping"
                elif stage == "jumping":
                    if avg_x_smoothed > peak_x:
                        peak_x = avg_x_smoothed
                    if (peak_x - avg_x_smoothed) < DIST_THRESHOLD / 2:
                        jump_distance = max(0, (peak_x - start_x) * reference_width_cm)
                        jump_distances.append(jump_distance)
                        stage = "waiting"
                        baseline_x = avg_x_smoothed

    cap.release()

    if jump_distances:
        best_jump = max(jump_distances)
        avg_top3 = np.mean(sorted(jump_distances, reverse=True)[:3])
        worst_jump = min(jump_distances)
        fatigue_index = ((best_jump - worst_jump) / best_jump) * 100 if len(jump_distances) > 1 else 0
    else:
        best_jump = avg_top3 = fatigue_index = 0

    return {
        "all_jumps": np.round(jump_distances,2).tolist(),
        "best_jump": best_jump,
        "avg_top3": avg_top3,
        "fatigue_index": fatigue_index
    }
