# app.py
import streamlit as st
from Squats_counter import analyze_squats
from situps_counter import analyze_situps
from sit_and_reach import analyze_sitreach
from vertical_jump import analyze_vertical_jump
from broad_jump import analyze_broad_jump

st.set_page_config(page_title="Fitness Analyzer", layout="wide")

st.title("🏋️ Fitness Analyzer")
st.write("Select a test, upload your video, and get results instantly!")

# Sidebar to select test
test = st.sidebar.selectbox(
    "Choose Test",
    ["Squats", "Sit-ups", "Sit & Reach", "Vertical Jump", "Standing Broad Jump"]
)

uploaded_file = st.file_uploader("Upload your video", type=["mp4", "mov", "avi"])

if uploaded_file is not None:
    # Save the uploaded video temporarily
    video_path = f"temp_video.mp4"
    with open(video_path, "wb") as f:
        f.write(uploaded_file.getbuffer())

    st.video(video_path)
    st.write("Processing video, please wait...")

    # Run analysis based on selected test
    if test == "Squats":
        results = analyze_squats(video_path)
        st.success("✅ Squat Analysis Complete!")
        st.write(f"Total Squats: {results['total_squats']}")
        st.write(f"Form Accuracy: {results['form_accuracy']}%")

    elif test == "Sit-ups":
        results = analyze_situps(video_path)
        st.success("✅ Sit-up Analysis Complete!")
        st.write(f"Total Sit-ups: {results['total_situps']}")
        st.write(f"Form Accuracy: {results['form_accuracy']:.2f}%")
        st.write(f"Core Strength Score: {results['core_strength_score']:.2f}")

    elif test == "Sit & Reach":
        results = analyze_sitreach(video_path)
        st.success("✅ Sit & Reach Analysis Complete!")
        st.write(f"Max Forward Reach (normalized): {results['max_reach']:.2f}")
        st.write(f"Flexibility Score: {results['flexibility_score']:.2f}")

    elif test == "Vertical Jump":
        results = analyze_vertical_jump(video_path)
        st.success("✅ Vertical Jump Analysis Complete!")
        st.write(f"All Jumps Detected (cm): {results['all_jumps']}")
        st.write(f"Best Jump Height: {results['best_jump']:.2f} cm")
        st.write(f"Average of Top 3 Jumps: {results['avg_top3']:.2f} cm")
        st.write(f"Fatigue Index: {results['fatigue_index']:.2f}%")
        st.write(f"Power Score: {results['power_score']:.2f}")

    elif test == "Standing Broad Jump":
        results = analyze_broad_jump(video_path)
        st.success("✅ Standing Broad Jump Analysis Complete!")
        st.write(f"All Jumps Detected (cm): {results['all_jumps']}")
        st.write(f"Best Jump Distance: {results['best_jump']:.2f} cm")
        st.write(f"Average of Top 3 Jumps: {results['avg_top3']:.2f} cm")
        st.write(f"Fatigue Index: {results['fatigue_index']:.2f}%")
