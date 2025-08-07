import gradio as gr
import pytesseract
from PIL import Image, ImageEnhance
import joblib
import numpy as np

# Load models
classifier_model = joblib.load("resume_classifier_model.pkl")
vectorizer = joblib.load("resume_vectorizer.pkl")
label_encoder = joblib.load("resume_label_encoder.pkl")

# Set tesseract path for Windows
pytesseract.pytesseract.tesseract_cmd = r"C:\Program Files\Tesseract-OCR\tesseract.exe"

# Function to preprocess image and extract text
def preprocess_image(image):
    # Convert to grayscale
    gray_image = image.convert("L")
    
    # Enhance image: Increase contrast
    enhancer = ImageEnhance.Contrast(gray_image)
    enhanced_image = enhancer.enhance(2)  # Enhance contrast for clarity
    
    # Apply thresholding for better text separation
    gray_array = np.array(enhanced_image)
    gray_array[gray_array < 150] = 0
    gray_array[gray_array >= 150] = 255
    processed_image = Image.fromarray(gray_array)
    
    return processed_image

# Function to analyze resume
def analyze_resume(image):
    # Preprocess image before text extraction
    processed_image = preprocess_image(image)

    # Extract text using Tesseract OCR with custom configurations for better accuracy
    custom_config = r'--oem 3 --psm 6'  # oem 3: both standard and LSTM OCR, psm 6: assume a uniform block of text
    extracted_text = pytesseract.image_to_string(processed_image, config=custom_config)

    # Check if text is too short
    if len(extracted_text.strip()) < 20:
        return "Text extraction failed or too little text. Try a clearer resume image."

    # Vectorize the extracted text
    X = vectorizer.transform([extracted_text])

    # Predict job role
    prediction = classifier_model.predict(X)
    prediction_proba = classifier_model.predict_proba(X)

    # Decode label (job role)
    job_role = label_encoder.inverse_transform(prediction)[0]
    confidence = np.max(prediction_proba) * 100

    # Return results with more structured output
    top_n_predictions = [(label_encoder.inverse_transform([i])[0], proba) for i, proba in enumerate(prediction_proba[0])]
    top_n_predictions = sorted(top_n_predictions, key=lambda x: x[1], reverse=True)[:3]  # Top 3 predictions

    top_predictions_text = "\n".join([f"{role}: {conf * 100:.2f}%" for role, conf in top_n_predictions])
    
    return (
        f"Predicted Job Role: {job_role}\n"
        f"Confidence: {confidence:.2f}%\n\n"
        f"Top 3 Predictions:\n{top_predictions_text}\n\n"
        f"Extracted Resume Text:\n{extracted_text}"
    )

# Gradio UI
interface = gr.Interface(
    fn=analyze_resume,
    inputs=gr.Image(type="pil"),
    outputs="text",
    title="Resume Analyzer",
    description="Upload a resume image. It will extract text and predict the job role.",
)

interface.launch()
