document.addEventListener("DOMContentLoaded", function() {
    const acceptButton = document.querySelector("#accept-button");
    const emergencyAlert = document.querySelector("#emergency-alert");

    acceptButton.addEventListener("click", function() {
        emergencyAlert.style.display = "block";
    });
});