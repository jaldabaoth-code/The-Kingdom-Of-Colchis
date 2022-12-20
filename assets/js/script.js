const message = "Thank you for submitting your request. We will respond shortly.";

document.getElementById("contactForm").addEventListener("submit", function (event) {
    event.preventDefault();
    alert(message);
});
