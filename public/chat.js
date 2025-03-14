document.addEventListener("DOMContentLoaded", function() {
    const chatBox = document.getElementById("chat-box");
    const chatForm = document.getElementById("chat-form");
    const messageInput = document.getElementById("message");
    const senderId = document.getElementById("sender_id").value;

    // Load chat messages every 2 seconds
    function loadMessages() {
        fetch("api/get_messages.php")
            .then(response => response.text())
            .then(data => {
                chatBox.innerHTML = data;
            });
    }
    setInterval(loadMessages, 2000);
    loadMessages();

    // Send message
    chatForm.addEventListener("submit", function(e) {
        e.preventDefault();
        const message = messageInput.value;
        fetch("api/send_message.php", {
            method: "POST",
            body: new URLSearchParams({ sender_id: senderId, message: message }),
            headers: { "Content-Type": "application/x-www-form-urlencoded" }
        }).then(() => {
            messageInput.value = "";
            loadMessages();
        });
    });
});
