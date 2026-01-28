// Konfigurasi Gemini API
const API_KEY = "AIzaSyCECDXdIayeHOVPNrIFDn9eat-OQDXckxc";

async function kirimPesan() {
    const userInput = document.getElementById('user-input');
    const chatWindow = document.getElementById('chat-window');
    const text = userInput.value.trim();

    if (!text) return;

    // 1. Tampilkan pesan user
    tambahChat(text, 'user');
    userInput.value = '';

    // 2. Tampilkan typing indicator
    const typingIndicator = tampilkanTypingIndicator();

    try {
        // 3. Panggil API Gemini
        const response = await fetch(`https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=${API_KEY}`, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({
                contents: [{ 
                    parts: [{ 
                        text: `Kamu adalah asisten AI resmi Darul Qur'an Rahman (Asrama Yatim & Dhuafa), Jakarta Selatan. Jawablah pertanyaan berikut dengan sangat sopan, ramah, dan islami: ${text}` 
                    }] 
                }]
            })
        });

        const data = await response.json();

        // 4. Sembunyikan typing indicator
        sembunyikanTypingIndicator(typingIndicator);

        // 5. Cek apakah ada error dari Google
        if (data.error) {
            console.error("Detail Error:", data.error);
            tambahChat("Sistem sedang sibuk (Error: " + data.error.message + ")", 'bot');
        } else if (data.candidates && data.candidates[0].content) {
            const botReply = data.candidates[0].content.parts[0].text;
            tambahChat(botReply, 'bot');
        } else {
            tambahChat("Maaf, saya tidak mengerti maksud Anda.", 'bot');
        }

    } catch (error) {
        console.error("Koneksi Gagal:", error);
        sembunyikanTypingIndicator(typingIndicator);
        tambahChat("Gagal terhubung. Pastikan internet Anda aktif.", 'bot');
    }
}

function tambahChat(text, sender) {
    const chatWindow = document.getElementById('chat-window');
    const div = document.createElement('div');
    div.style.padding = "10px";
    div.style.margin = "5px 0";
    div.style.borderRadius = "10px";
    div.style.fontSize = "14px";
    div.style.maxWidth = "85%";
    div.style.lineHeight = "1.4";

    if (sender === 'user') {
        div.style.alignSelf = "flex-end";
        div.style.background = "#1a5d1a";
        div.style.color = "white";
        div.innerText = text;
    } else {
        div.style.alignSelf = "flex-start";
        div.style.background = "#eeeeee";
        div.style.color = "#333";
        // Menggunakan innerText agar format teks dari AI (seperti baris baru) tetap terjaga
        div.innerText = text;
    }
    
    chatWindow.appendChild(div);
    chatWindow.scrollTop = chatWindow.scrollHeight;
}

function toggleChat() {
    const container = document.getElementById('gemini-chat-container');
    const toggleBtn = document.getElementById('chatToggleBtn');
    if (container.style.display === 'none' || container.style.display === '') {
        container.style.display = 'flex';
        toggleBtn.classList.add('hidden');
    } else {
        container.style.display = 'none';
        toggleBtn.classList.remove('hidden');
    }
}

function tampilkanTypingIndicator() {
    const chatWindow = document.getElementById('chat-window');
    const indicator = document.createElement('div');
    indicator.className = 'typing-indicator';
    indicator.innerHTML = '<span></span><span></span><span></span>';
    chatWindow.appendChild(indicator);
    chatWindow.scrollTop = chatWindow.scrollHeight;
    return indicator;
}

function sembunyikanTypingIndicator(indicator) {
    if (indicator && indicator.parentNode) {
        indicator.parentNode.removeChild(indicator);
    }
}

// Allow sending message with Enter key
document.addEventListener('DOMContentLoaded', function() {
    const userInput = document.getElementById('user-input');
    if (userInput) {
        userInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                kirimPesan();
            }
        });
    }
});
