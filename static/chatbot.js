
const faqResponses = {
    "what is college name": "The college name is DRK Institute of Science and Technology.",
    "contact": "Mobile: +91-90007 11899 or +91-87907 11899, Mail: principal@drkist.edu.in",
    "courses": "We offer:\n- CSE\n- CSE (AI & ML)\n- CSE (Data Science)\n- CSE (Cyber Security)\n- Electronics and Communication Engineering\n- Electrical and Electronics Engineering \n- Mechanical Engineering\n- Civil Engineering",
    "admission": "Apply through Telangana EAPCET or contact Admission Department for Management Quota.",
    "timings": "9:20 AM to 4:20 PM, Monday to Saturday.",
    "about": "DRKIST is a premier educational institution dedicated to helping students learn and grow.",
    "address": "Near Pragathi Nagar, Bowrampet (V), Hyderabad - 500043, Telangana, India",
    "placement officer":"Syed Irfan Ali is the Placement Officer of Principal of DRK Institute of Science & Technology\n We have a dedicated Placement.",
    "placements": "We have a dedicated Placement Cell and Top companies visit our college",
    "hostel": "Not currently available.",
    "transport": "We provide bus facilities across Hyderabad.",
    "check results": "Check on JNTUH website or DRKIST Results Portal.",
    "eligibility": "Eligibility varies. For B.Tech: Intermediate (10+2) or Diploma. For MBA: Bachelor's degree in any field.",
    "library": "Yes, the college has a well-stocked library with a wide range of books.",
    "syllabus": "Available on JNTUH website.",
    "duration": "B.Tech is 4 years (8 semesters).",
    "cse of hod": "Dr. K. Kanaka Vardhini is the Head of CSE",
    "hod of csm": "Dr. Durga Prasad Kavadi is the Head of CSE (AI & ML).",
    "hod of csd": "Mr. Jacob Jayaraj G is the Head of CSE (Data Science).",
    "hod of csc": "Dr. Durga Prasad Kavadi is the Head of CSE (Cyber Security).",
    "hod of eee": "Mrs. Y. Sai Jyotirmayi is the Head of EEE.",
    "hod of mechanical": "Dr. Pavan Bagali is the Head of Mechanical Engineering.",
    "hod of ece": "Ms. M. Sravanthi is the Head of ECE.",
    "hod of hr": "Mr. K.T. Thomas is the Head of HR.",
    "hod of mba": "Dr. P. Prasanthi is the Head of MBA Department.",
    "how to join club":"Club events and sessions are conducted on Saturdays.You can join by contacting head of club",
    "clubs": "We have technical and cultural clubs. Sessions usually take place on Saturdays.",
    "labs": "We have specialized labs for each stream.",
    "fees": "Please contact the Admission Department for the latest fee structure.",
    "tc": "Visit the Admission Department for your Transfer Certificate (TC).",
    "bonafide": "Request your Bonafide Certificate at the Admission Department.",
    "professor": "Yes, contact details (email & mobile) are available on the official website.",
    "timetable": "Please refer to the DRKIST attendance portal for your class timetable.",
    "minimum attendance required": "75% attendance is mandatory.",
    "attendance": "Check your attendance on the DRKIST Attendance Portal using your Roll Number.",
    "sports": "Yes, we offer a variety of sports and activities including:\n- Cricket\n- Basketball\n- Volleyball\n- Kho-Kho\n- Throw Ball\n- Badminton",
    "chairman":"Sri D.B Chandra Sekhara Rao is the Chairman of DRK",
    "Secretary":"Sri D. Santosh",
    "Treasurer":"Sri D. Sriram",
    "principal":"Dr. Gnaneswara Rao Nitta is the Principal of DRK Institute of Science & Technology",
};

const keywordMap = {
    "support":"placements",
    "provide":"placements",
    "tpo":"placement officer",
    "training":"placement officer",
    "minimum attendance":"minimum attendance required",
    "student attendance":"attendance",
    "check attendance":"attendance",
    "faculty":"professor",
    "aiml":"hod of csm",
    "cyber security":"hod of csc",
    "data science":"hod of csd",
    "open":"timings",
    "admit":"admission",
    "seat":"admission",
    "course": "courses",
    "program": "courses",
    "study": "courses",
    "stream": "courses",
    "branch": "courses",
    "time": "timings",
    "schedule": "timings",
    "hour": "timings",
    "location": "address",
    "locate": "address",
    "where": "address",
    "place": "address",
    "job": "placements",
    "career": "placements",
    "recruitment": "placements",
    "stay": "hostel",
    "accommodation": "hostel",
    "bus": "transport",
    "travel": "transport",
    "result": "results",
    "mark": "results",
    "score": "results",
    "eligible": "eligibility",
    "qualification": "eligibility",
    "requirement": "eligibility",
    "fee": "fees",
    "payment": "fees",
    "cost": "fees",
    "record": "transcripts",
    "certificate": "bonafide",
    "proof": "bonafide",
    "tc": "tc",
    "transfer": "tc",
    "to join clubs":"how to join club",
    "club": "clubs",
    "society": "clubs",
    "group": "clubs",
    "lab": "labs",
    "practical": "labs",
    "experiment": "labs",
    "uniform": "dress code",
    "clothes": "dress code",
    "wear": "dress code",
    "class": "timetable",
    "schedule": "timetable",
    "present": "attendance",
    "absent": "attendance",
    "percentage": "minimum attendance",
    "requirement": "minimum attendance",
    "mandatory": "minimum attendance",
};
// Show initial message bubble
setTimeout(() => {
    document.getElementById('chat-text-box').style.display = 'block';
    setTimeout(() => {
        document.getElementById('chat-text-box').style.display = 'none';
    }, 3000);
}, 2000);

// Toggle chat visibility
function toggleChatbox() {
    const chatbox = document.getElementById('chatbox');
    if (chatbox.style.display === 'none' || !chatbox.style.display) {
        chatbox.style.display = 'flex';
        displayGreeting();
    } else {
        chatbox.style.display = 'none';
    }
}

// Greet based on time
function displayGreeting() {
    const hour = new Date().getHours();
    const greeting = hour < 12 ? "Good Morning!" : hour < 18 ? "Good Afternoon!" : "Good Evening!";
    addMessage(`<strong>DRK Assistant:</strong> ${greeting}`, 'bot');
    addMessage("<strong>DRK Assistant:</strong> How can I assist you today?", 'bot');
}

// Add message to chat UI
function addMessage(text, sender) {
    const chatMessages = document.getElementById('chat-messages');
    const messageDiv = document.createElement('div');
    messageDiv.classList.add('message', sender === 'user' ? 'user-message' : 'bot-message');
    
    // Use innerHTML to render bold tags
    messageDiv.innerHTML = text;

    // Handle line breaks for bot messages
    if (sender === 'bot') {
        const brCount = (text.match(/<br>/g) || []).length;
        if (brCount > 0) {
            const parts = text.split('<br>');
            messageDiv.innerHTML = parts.join('<br>');
        }
    }

    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

// Button click triggers
function selectOption(option) {
    addMessage(`<strong>You:</strong> ${option}`, 'user');
    const response = getBestResponse(option);
    setTimeout(() => {
        addMessage(`<strong>DRK Assistant:</strong> ${response}`, 'bot');
    }, 500);
}

function getBestResponse(message) {
    const cleanMsg = message.toLowerCase().replace(/[^\w\s]/gi, '');
    
    // Exact match
    if (faqResponses[cleanMsg]) {
        return faqResponses[cleanMsg];
    }

    // Check keyword mappings
    const words = cleanMsg.split(/\s+/);
    for (const word of words) {
        const mapped = keywordMap[word];
        if (mapped && faqResponses[mapped]) {
            return faqResponses[mapped];
        }
    }

    // Soft match: check if the user message includes any faq key
    for (const key in faqResponses) {
        if (cleanMsg.includes(key)) {
            return faqResponses[key];
        }
    }

    // Match with similar questions
    const similarity = (a, b) => {
        const aWords = a.split(' ');
        const bWords = b.split(' ');
        let matchCount = 0;
        aWords.forEach(word => {
            if (bWords.includes(word)) matchCount++;
        });
        return matchCount / Math.max(aWords.length, bWords.length);
    };

    let bestMatch = "";
    let bestScore = 0;
    for (const key in faqResponses) {
        const score = similarity(cleanMsg, key);
        if (score > bestScore) {
            bestScore = score;
            bestMatch = key;
        }
    }

    if (bestScore >= 0.4) {
        return faqResponses[bestMatch];
    }

    return "I'm sorry, I don't understand that question. Please try asking something else or use the options above.";
}

// Handle send
function sendMessage() {
    const inputBox = document.getElementById('input-box');
    const message = inputBox.value.trim();
    if (message) {
        addMessage(`<strong>You:</strong> ${message}`, 'user');
        inputBox.value = '';
        setTimeout(() => {
            const response = getBestResponse(message);
            addMessage(`<strong>DRK Assistant:</strong> ${response}`, 'bot');
        }, 800);
    }
}

// Enter key triggers send
document.getElementById('input-box').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') sendMessage();
});

// Hide chat initially
document.getElementById('chatbox').style.display = 'none';
