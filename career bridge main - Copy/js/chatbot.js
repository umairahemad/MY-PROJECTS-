// Initial Variables
let currentStep = 0;
let userResponses = [];
const interviewQuestions = [
    "What is your full name?",
    "What position are you applying for?",
    "Can you describe your top 3 skills?",
    "Tell us about your previous work experience.",
    "What are your career goals for the next 5 years?"
];

// Sample job database
const jobDatabase = [
    {
        title: "Software Engineer",
        skills: ["programming", "development", "java", "python", "c++", "algorithms"]
    },
    {
        title: "Project Manager",
        skills: ["management", "leadership", "communication", "planning", "organization"]
    },
    {
        title: "Data Analyst",
        skills: ["data analysis", "sql", "statistics", "excel", "python", "visualization"]
    },
    {
        title: "Graphic Designer",
        skills: ["design", "creativity", "adobe", "photoshop", "illustrator", "branding"]
    }
];

// Open Chatbot
const openChatBtn = document.getElementById('openChatBtn');
const chatbotContainer = document.querySelector('.chatbot-container');
const closeBtn = document.querySelector('.close-btn');

openChatBtn.addEventListener('click', () => {
    chatbotContainer.style.transform = 'scale(1)';
    openChatBtn.style.display = 'none';
});

closeBtn.addEventListener('click', () => {
    chatbotContainer.style.transform = 'scale(0)';
    openChatBtn.style.display = 'block';
});

// Start Interview
const startInterviewBtn = document.getElementById('startInterviewBtn');
const userInput = document.getElementById('userInput');
const sendBtn = document.getElementById('sendBtn');
const chatBody = document.querySelector('.chatbot-body');

startInterviewBtn.addEventListener('click', () => {
    startInterviewBtn.style.display = 'none';
    userInput.disabled = false;
    sendBtn.disabled = false;
    displayMessage(interviewQuestions[currentStep], 'bot-message');
    currentStep++;
});

// Send User Response
sendBtn.addEventListener('click', () => {
    const userText = userInput.value.trim();
    if (userText === '') return;

    displayMessage(userText, 'user-message');
    userResponses.push(userText);
    userInput.value = '';

    if (currentStep < interviewQuestions.length) {
        setTimeout(() => {
            displayMessage(interviewQuestions[currentStep], 'bot-message');
            currentStep++;
        }, 1000);
    } else {
        setTimeout(() => {
            displayMessage("Thank you for completing the interview. Generating job suggestions based on your skills...", 'bot-message');
            generateJobSuggestion();
        }, 1000);
    }
});

// Display Message Function
function displayMessage(text, className) {
    const messageDiv = document.createElement('div');
    messageDiv.classList.add('message', className);
    messageDiv.innerHTML = text;
    chatBody.appendChild(messageDiv);
    chatBody.scrollTop = chatBody.scrollHeight;
}

// Generate Job Suggestion Function
function generateJobSuggestion() {
    const userSkillsInput = userResponses[2].toLowerCase();
    const userSkills = userSkillsInput.split(/[, ]+/).map(skill => skill.trim());

    let matchedJobs = jobDatabase.map(job => {
        const matchedSkills = job.skills.filter(skill => userSkills.includes(skill));
        return {
            title: job.title,
            matchCount: matchedSkills.length
        };
    });

    matchedJobs.sort((a, b) => b.matchCount - a.matchCount);

    setTimeout(() => {
        if (matchedJobs[0].matchCount > 0) {
            displayMessage(`Based on your skills, we recommend you to apply for the position of <strong>${matchedJobs[0].title}</strong>.`, 'bot-message');
        } else {
            displayMessage("We couldn't find a perfect match for your skills. Consider exploring more opportunities or enhancing your skill set.", 'bot-message');
        }
        displayMessage("Thank you for using our Interview Bot! 👋", 'bot-message');
        userInput.disabled = true;
        sendBtn.disabled = true;
    }, 2000);
}
