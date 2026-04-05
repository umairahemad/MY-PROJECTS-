# situps_counter.py
import cv2
import mediapipe as mp
import time

def analyze_situps(video_path):
    cap = cv2.VideoCapture(video_path)
    mp_pose = mp.solutions.pose

    counter = 0
    stage = None
    good_form_reps = 0
    rep_times = []
    rep_start_time = None
    THRESHOLD = 0.15
    ELBOW_TO_KNEE_THRESHOLD = 0.15

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
                shoulder_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_SHOULDER].y
                hip_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_HIP].y
                elbow_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_ELBOW].y
                knee_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_KNEE].y

                diff = abs(shoulder_y - hip_y)
                elbow_to_knee = abs(elbow_y - knee_y)

                if diff < THRESHOLD and stage != "down":
                    stage = "down"
                    rep_start_time = time.time()
                if diff > THRESHOLD and stage == "down":
                    counter += 1
                    stage = "up"
                    if rep_start_time:
                        rep_times.append(time.time() - rep_start_time)
                    rep_start_time = time.time()
                    if elbow_to_knee < ELBOW_TO_KNEE_THRESHOLD:
                        good_form_reps += 1
                if stage == "up" and diff < THRESHOLD:
                    stage = None

    cap.release()

    if counter > 0 and rep_times:
        avg_time = sum(rep_times) / len(rep_times)
        form_accuracy = (good_form_reps / counter) * 100
        core_strength_score = (counter * form_accuracy) / avg_time
    else:
        form_accuracy = 0
        core_strength_score = 0

    return {
        "total_situps": counter,
        "form_accuracy": form_accuracy,
        "core_strength_score": core_strength_score
    }
