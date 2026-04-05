# vertical_jump.py
import cv2
import mediapipe as mp
import numpy as np

def analyze_vertical_jump(video_path):
    cap = cv2.VideoCapture(video_path)
    mp_pose = mp.solutions.pose
    hip_history = []
    jump_heights = []
    baseline_hip = None
    stage = "waiting"
    SMOOTHING_WINDOW = 5
    JUMP_THRESHOLD = 0.07

    def smooth(values):
        if len(values) < SMOOTHING_WINDOW:
            return values[-1]
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
                hip_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_HIP].y
                hip_history.append(hip_y)
                hip_smoothed = smooth(hip_history)

                if baseline_hip is None:
                    baseline_hip = hip_smoothed

                if stage == "waiting" and baseline_hip - hip_smoothed > JUMP_THRESHOLD:
                    stage = "jumping"
                    peak = hip_smoothed
                elif stage == "jumping":
                    if hip_smoothed < peak:
                        peak = hip_smoothed
                    if baseline_hip - hip_smoothed < JUMP_THRESHOLD / 2:
                        jump_heights.append((baseline_hip - peak) * 100)
                        stage = "waiting"

    cap.release()

    if jump_heights:
        best_jump = max(jump_heights)
        avg_top3 = np.mean(sorted(jump_heights, reverse=True)[:3])
        worst_jump = min(jump_heights)
        fatigue_index = ((best_jump - worst_jump) / best_jump) * 100 if len(jump_heights) > 1 else 0
        athlete_weight = 70
        power_score = (best_jump * athlete_weight) / 100
    else:
        best_jump = avg_top3 = fatigue_index = power_score = 0

    return {
        "all_jumps": np.round(jump_heights, 2).tolist(),
        "best_jump": best_jump,
        "avg_top3": avg_top3,
        "fatigue_index": fatigue_index,
        "power_score": power_score
    }
