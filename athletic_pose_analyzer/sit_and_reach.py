# sit_and_reach.py
import cv2
import mediapipe as mp
import numpy as np

def analyze_sitreach(video_path):
    cap = cv2.VideoCapture(video_path)
    mp_pose = mp.solutions.pose
    valid_reaches = []

    def calculate_reach(results):
        left_wrist = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_WRIST]
        right_wrist = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_WRIST]
        left_foot = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_FOOT_INDEX]
        right_foot = results.pose_landmarks.landmark[mp_pose.PoseLandmark.RIGHT_FOOT_INDEX]
        hip = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_HIP]

        wrist_x = min(left_wrist.x, right_wrist.x)
        foot_x = min(left_foot.x, right_foot.x)
        hip_x = hip.x

        if wrist_x < hip_x:
            reach_distance = abs(foot_x - wrist_x)
            leg_length = abs(hip.y - left_foot.y) if abs(hip.y - left_foot.y) > 0 else 0.01
            flexibility_score = (reach_distance / leg_length) * 100
            return flexibility_score
        return None

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
                score = calculate_reach(results)
                if score is not None:
                    valid_reaches.append(score)

    cap.release()
    if valid_reaches:
        final_score = np.mean(sorted(valid_reaches)[-5:])
        max_reach = max(valid_reaches)
    else:
        final_score = 0
        max_reach = 0

    return {"max_reach": max_reach, "flexibility_score": final_score}
