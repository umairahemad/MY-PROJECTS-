from flask import Flask, request, jsonify, render_template
from flask_cors import CORS
import joblib
import numpy as np

app = Flask(__name__)
CORS(app)

# Load model and scaler
model = joblib.load('diabetes_model.joblib')
scaler = joblib.load('scaler.joblib')

# Function to predict diabetes
def predict_diabetes(patient_data):
    patient_data_scaled = scaler.transform([patient_data])
    prediction = model.predict(patient_data_scaled)
    return "Patient is diabetic." if prediction == 1 else "Patient is not diabetic."

# Serve HTML page
@app.route('/')
def home():
    return render_template('webpage.html')  # looks for templates/webpage.html

# Handle prediction
@app.route('/predict', methods=['POST'])
def predict():
    data = request.get_json(force=True)
    patient_data = data['patient_data']
    result = predict_diabetes(patient_data)
    return jsonify(result=result)

if __name__ == '__main__':
    app.run(debug=True)
