import cv2
import mediapipe as mp
import time

VIDEO_PATH = r"C:\Users\SHAIKH UMAIR\Videos\Recording 2025-09-21 190108.mp4"
cap = cv2.VideoCapture(VIDEO_PATH)

mp_pose = mp.solutions.pose
counter = 0
stage = None
THRESHOLD = 0.07  # Try 0.07, adjust if needed

def squat_counter(results, stage, counter, THRESHOLD=0.07):
    hip_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_HIP].y
    knee_y = results.pose_landmarks.landmark[mp_pose.PoseLandmark.LEFT_KNEE].y
    diff = abs(knee_y - hip_y)

    print(f"Hip Y: {hip_y:.3f}, Knee Y: {knee_y:.3f}, Diff: {diff:.3f}, Stage: {stage}, Counter: {counter}")

    # Squat down: hip gets close to knee
    if diff < THRESHOLD and stage != "down":
        stage = "down"
        print("Squat Down Detected")

    # Stand up: hip moves away from knee after squat down
    if diff > THRESHOLD and stage == "down":
        counter += 1
        print("Squat Counted!")
        stage = "up"

    # Reset stage if standing for a while
    if stage == "up" and diff < THRESHOLD:
        stage = None

    return stage, counter

instructions = "Squat Analysis | Q=Quit"

with mp_pose.Pose(min_detection_confidence=0.5, min_tracking_confidence=0.5) as pose:
    while cap.isOpened():
        ret, frame = cap.read()
        if not ret:
            break

        image = cv2.cvtColor(frame, cv2.COLOR_BGR2RGB)
        image.flags.writeable = False
        results = pose.process(image)
        image.flags.writeable = True
        image = cv2.cvtColor(image, cv2.COLOR_RGB2BGR)

        if results.pose_landmarks:
            mp.solutions.drawing_utils.draw_landmarks(
                image, results.pose_landmarks, mp_pose.POSE_CONNECTIONS)
            stage, counter = squat_counter(
                results, stage, counter, THRESHOLD
            )

        cv2.putText(image, f'Squats: {counter}', (10, 60),
                    cv2.FONT_HERSHEY_SIMPLEX, 1, (0,255,0), 2)
        cv2.putText(image, instructions, (10, 30),
                    cv2.FONT_HERSHEY_SIMPLEX, 0.7, (255,255,255), 2)

        cv2.imshow("Squat Analysis", image)
        if cv2.waitKey(10) & 0xFF == ord('q'):
            break

cap.release()
cv2.destroyAllWindows()