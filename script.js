const message =
  "Thank you for submitting your request. We will respond shortly.";

document
  .getElementById("contact_form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    alert(message);
  });
