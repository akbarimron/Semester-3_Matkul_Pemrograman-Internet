// Timer State
let timerInterval = null;
let totalSeconds = 5400; // Default 90 menit
let remainingSeconds = totalSeconds;
let isRunning = false;
let soundEnabled = true;

// DOM Elements
const timeDisplay = document.getElementById('timeDisplay');
const startBtn = document.getElementById('startBtn');
const pauseBtn = document.getElementById('pauseBtn');
const resetBtn = document.getElementById('resetBtn');
const minus10Btn = document.getElementById('minus10Btn');
const plus10Btn = document.getElementById('plus10Btn');
const subjectInput = document.getElementById('subjectInput');
const settingsBtn = document.getElementById('settingsBtn');
const settingsModal = document.getElementById('settingsModal');
const closeModalBtn = document.getElementById('closeModalBtn');
const saveSettingsBtn = document.getElementById('saveSettingsBtn');
const hoursInput = document.getElementById('hoursInput');
const minutesInput = document.getElementById('minutesInput');
const soundToggle = document.getElementById('soundToggle');
const toast = document.getElementById('toast');
const toastMessage = document.getElementById('toastMessage');
const progressCircle = document.querySelector('.progress-ring-circle');
const progressBar = document.getElementById('progressBar');
const progressPercentage = document.getElementById('progressPercentage');
const totalDuration = document.getElementById('totalDuration');
const remainingTime = document.getElementById('remainingTime');
const elapsedTime = document.getElementById('elapsedTime');

// Add SVG gradient
const svg = document.querySelector('.progress-ring');
const defs = document.createElementNS('http://www.w3.org/2000/svg', 'defs');
const gradient = document.createElementNS('http://www.w3.org/2000/svg', 'linearGradient');
gradient.setAttribute('id', 'gradient');
gradient.setAttribute('x1', '0%');
gradient.setAttribute('y1', '0%');
gradient.setAttribute('x2', '100%');
gradient.setAttribute('y2', '100%');

const stop1 = document.createElementNS('http://www.w3.org/2000/svg', 'stop');
stop1.setAttribute('offset', '0%');
stop1.setAttribute('style', 'stop-color:#6366f1;stop-opacity:1');

const stop2 = document.createElementNS('http://www.w3.org/2000/svg', 'stop');
stop2.setAttribute('offset', '100%');
stop2.setAttribute('style', 'stop-color:#8b5cf6;stop-opacity:1');

gradient.appendChild(stop1);
gradient.appendChild(stop2);
defs.appendChild(gradient);
svg.insertBefore(defs, svg.firstChild);

// Initialize
function init() {
    updateDisplay();
    updateProgressRing();
    updateProgressBar();
    loadSettings();
}

// Format time display
function formatTime(seconds) {
    const hours = Math.floor(seconds / 3600);
    const mins = Math.floor((seconds % 3600) / 60);
    const secs = seconds % 60;
    
    if (hours > 0) {
        return `${hours}:${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
    } else {
        return `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
    }
}

// Update time display
function updateDisplay() {
    timeDisplay.textContent = formatTime(remainingSeconds);
    
    // Add warning/danger classes
    timeDisplay.classList.remove('warning', 'danger');
    if (remainingSeconds <= 60) {
        timeDisplay.classList.add('danger');
    } else if (remainingSeconds <= 300) {
        timeDisplay.classList.add('warning');
    }
}

// Update progress ring
function updateProgressRing() {
    const radius = 140;
    const circumference = 2 * Math.PI * radius;
    const progress = remainingSeconds / totalSeconds;
    const offset = circumference * (1 - progress);
    
    progressCircle.style.strokeDasharray = `${circumference} ${circumference}`;
    progressCircle.style.strokeDashoffset = offset;
    
    // Change color based on time
    if (remainingSeconds <= 60) {
        stop1.setAttribute('style', 'stop-color:#ef4444;stop-opacity:1');
        stop2.setAttribute('style', 'stop-color:#dc2626;stop-opacity:1');
    } else if (remainingSeconds <= 300) {
        stop1.setAttribute('style', 'stop-color:#f59e0b;stop-opacity:1');
        stop2.setAttribute('style', 'stop-color:#fb923c;stop-opacity:1');
    } else {
        stop1.setAttribute('style', 'stop-color:#6366f1;stop-opacity:1');
        stop2.setAttribute('style', 'stop-color:#8b5cf6;stop-opacity:1');
    }
}

// Update progress bar
function updateProgressBar() {
    const progress = (remainingSeconds / totalSeconds) * 100;
    progressBar.style.width = `${progress}%`;
    progressPercentage.textContent = `${Math.round(progress)}%`;
    
    // Update bar color classes
    progressBar.classList.remove('warning', 'danger');
    if (remainingSeconds <= 60) {
        progressBar.classList.add('danger');
    } else if (remainingSeconds <= 300) {
        progressBar.classList.add('warning');
    }
    
    // Update stats
    totalDuration.textContent = formatTime(totalSeconds);
    remainingTime.textContent = formatTime(remainingSeconds);
    elapsedTime.textContent = formatTime(totalSeconds - remainingSeconds);
}

// Start timer
function startTimer() {
    if (isRunning) return;
    
    isRunning = true;
    startBtn.disabled = true;
    pauseBtn.disabled = false;
    
    timerInterval = setInterval(() => {
        if (remainingSeconds > 0) {
            remainingSeconds--;
            updateDisplay();
            updateProgressRing();
            updateProgressBar();
            
            // Play sound at specific intervals
            if (soundEnabled) {
                if (remainingSeconds === 300 || remainingSeconds === 60 || remainingSeconds === 10) {
                    playBeep();
                }
            }
        } else {
            stopTimer();
            handleTimerComplete();
        }
    }, 1000);
}

// Pause timer
function pauseTimer() {
    if (!isRunning) return;
    
    isRunning = false;
    clearInterval(timerInterval);
    startBtn.disabled = false;
    pauseBtn.disabled = true;
}

// Stop timer
function stopTimer() {
    isRunning = false;
    clearInterval(timerInterval);
    startBtn.disabled = false;
    pauseBtn.disabled = true;
}

// Reset timer
function resetTimer() {
    stopTimer();
    remainingSeconds = totalSeconds;
    updateDisplay();
    updateProgressRing();
    updateProgressBar();
    showToast('Timer direset!');
}

// Handle timer complete
function handleTimerComplete() {
    const subject = subjectInput.value.trim() || 'Ujian';
    
    // Show notification
    showToast(`Waktu ujian ${subject} telah selesai!`);
    
    // Play alarm
    if (soundEnabled) {
        playAlarm();
    }
    
    // Reset for next use
    remainingSeconds = totalSeconds;
    updateDisplay();
    updateProgressRing();
    updateProgressBar();
}

// Adjust time by 10 minutes
function adjustTime(minutes) {
    const seconds = minutes * 60;
    
    if (isRunning) {
        remainingSeconds += seconds;
        if (remainingSeconds < 0) remainingSeconds = 0;
        if (remainingSeconds > 86400) remainingSeconds = 86400; // Max 24 hours
    } else {
        totalSeconds += seconds;
        remainingSeconds = totalSeconds;
        if (totalSeconds < 60) totalSeconds = 60;
        if (totalSeconds > 86400) totalSeconds = 86400;
    }
    
    updateDisplay();
    updateProgressRing();
    updateProgressBar();
    
    const action = minutes > 0 ? 'ditambah' : 'dikurangi';
    showToast(`Waktu ${action} ${Math.abs(minutes)} menit`);
}

// Play beep sound
function playBeep() {
    const audioContext = new (window.AudioContext || window.webkitAudioContext)();
    const oscillator = audioContext.createOscillator();
    const gainNode = audioContext.createGain();
    
    oscillator.connect(gainNode);
    gainNode.connect(audioContext.destination);
    
    oscillator.frequency.value = 800;
    oscillator.type = 'sine';
    
    gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
    gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.2);
    
    oscillator.start(audioContext.currentTime);
    oscillator.stop(audioContext.currentTime + 0.2);
}

// Play alarm sound
function playAlarm() {
    const audioContext = new (window.AudioContext || window.webkitAudioContext)();
    
    for (let i = 0; i < 3; i++) {
        setTimeout(() => {
            const oscillator = audioContext.createOscillator();
            const gainNode = audioContext.createGain();
            
            oscillator.connect(gainNode);
            gainNode.connect(audioContext.destination);
            
            oscillator.frequency.value = 1000;
            oscillator.type = 'square';
            
            gainNode.gain.setValueAtTime(0.3, audioContext.currentTime);
            gainNode.gain.exponentialRampToValueAtTime(0.01, audioContext.currentTime + 0.5);
            
            oscillator.start(audioContext.currentTime);
            oscillator.stop(audioContext.currentTime + 0.5);
        }, i * 600);
    }
}

// Show toast notification
function showToast(message) {
    toastMessage.textContent = message;
    toast.classList.add('show');
    
    setTimeout(() => {
        toast.classList.remove('show');
    }, 3000);
}

// Settings Modal
function openModal() {
    const hours = Math.floor(totalSeconds / 3600);
    const minutes = Math.floor((totalSeconds % 3600) / 60);
    
    hoursInput.value = hours;
    minutesInput.value = minutes;
    soundToggle.checked = soundEnabled;
    
    settingsModal.classList.add('active');
}

function closeModal() {
    settingsModal.classList.remove('active');
}

function saveSettings() {
    const hours = parseInt(hoursInput.value) || 0;
    const minutes = parseInt(minutesInput.value) || 0;
    
    totalSeconds = (hours * 3600) + (minutes * 60);
    if (totalSeconds < 60) totalSeconds = 60; // Minimum 1 menit
    
    if (!isRunning) {
        remainingSeconds = totalSeconds;
    }
    
    soundEnabled = soundToggle.checked;
    
    // Save to localStorage
    localStorage.setItem('timerSettings', JSON.stringify({
        totalSeconds: totalSeconds,
        soundEnabled: soundEnabled
    }));
    
    updateDisplay();
    updateProgressRing();
    updateProgressBar();
    closeModal();
    showToast('Pengaturan disimpan!');
}

function loadSettings() {
    const saved = localStorage.getItem('timerSettings');
    if (saved) {
        const settings = JSON.parse(saved);
        totalSeconds = settings.totalSeconds || 5400;
        remainingSeconds = totalSeconds;
        soundEnabled = settings.soundEnabled !== undefined ? settings.soundEnabled : true;
        updateDisplay();
        updateProgressRing();
        updateProgressBar();
    }
}

// Event Listeners
startBtn.addEventListener('click', startTimer);
pauseBtn.addEventListener('click', pauseTimer);
resetBtn.addEventListener('click', resetTimer);
minus10Btn.addEventListener('click', () => adjustTime(-10));
plus10Btn.addEventListener('click', () => adjustTime(10));
settingsBtn.addEventListener('click', openModal);
closeModalBtn.addEventListener('click', closeModal);
saveSettingsBtn.addEventListener('click', saveSettings);

// Close modal on outside click
settingsModal.addEventListener('click', (e) => {
    if (e.target === settingsModal) {
        closeModal();
    }
});

// Keyboard shortcuts
document.addEventListener('keydown', (e) => {
    if (e.code === 'Space' && !e.target.matches('input')) {
        e.preventDefault();
        if (isRunning) {
            pauseTimer();
        } else {
            startTimer();
        }
    } else if (e.code === 'KeyR' && e.ctrlKey) {
        e.preventDefault();
        resetTimer();
    } else if (e.code === 'Escape') {
        closeModal();
    }
});

// Prevent page unload during active timer
window.addEventListener('beforeunload', (e) => {
    if (isRunning) {
        e.preventDefault();
        e.returnValue = '';
        return '';
    }
});

// Initialize on load
init();
