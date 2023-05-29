
function togglePassword() {
  var passType = document.querySelector("#pass");
  var showPass = document.querySelector("i.fa-solid.fa-eye-slash.show-pass");
  var hidePass = document.querySelector("i.fa-solid.fa-eye.action-icon.show-pass");

  var labelPass = document.querySelector(".label-pass").style;
  var inputPass = document.querySelector("input#pass").style;

  if (passType.type == "password") {
    passType.type = "text";
    showPass.style.display != showPass.style.display;
    hidePass.style.display != hidePass.style.display;

    labelPass.background = "transparent"
    inputPass.background = "transparent"
  } else {
    passType.type = "password";

    labelPass.background = "#dddddd"
    inputPass.background = "#dddddd"
  }
}