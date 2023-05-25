function togglePassword() {
    var passwordInput = document.getElementById("password");
    var toggleButton = document.getElementById("toggle");

    if (toggleButton.checked) {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  }