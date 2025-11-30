$(document).ready(function() {
  $("#regForm").on("submit", function(e) {
    let phone = $("#phone").val();
    let email = $("#email").val();

    // Simple phone number validation (10 digits)
    if (!/^\d{10}$/.test(phone)) {
      alert("Please enter a valid 10-digit phone number.");
      e.preventDefault();
      return;
    }

    // Basic email validation
    if (!email.includes("@")) {
      alert("Please enter a valid email address.");
      e.preventDefault();
      return;
    }

    alert("Form submitted successfully!");
  });
});
