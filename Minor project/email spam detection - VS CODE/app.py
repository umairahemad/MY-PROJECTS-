from flask import Flask, request, render_template
import joblib

# Load model and vectorizer
model = joblib.load('spam_model.pkl')
vectorizer = joblib.load('tfidf_vectorizer.pkl')

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('index.html')

@app.route('/predict', methods=['POST'])
def predict():
    email = request.form['email_text']
    email_transformed = vectorizer.transform([email])
    prediction = model.predict(email_transformed)[0]
    label = "SPAM" if prediction == 1 else "NOT SPAM"
    return render_template('index.html', prediction=label)

if __name__ == '__main__':
    app.run(debug=True)
