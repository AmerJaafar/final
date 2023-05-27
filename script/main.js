function getLoginPopup(item) {
  var popupDisplay = document.querySelector(".popup-container");
  var welcomeMsg = document.querySelector("#welcome-msg");

  switch (item) {
    case 'admin':
      popupDisplay.style.display = "block";
      welcomeMsg.innerHTML = "Welcome Admin";
      popupDisplay.classList.add('admin');
      popupDisplay.classList.remove('teac');
      popupDisplay.classList.remove('stu');
      break;
    case 'teacher':
      popupDisplay.style.display = "block";
      welcomeMsg.innerHTML = "Welcome Teacher";
      popupDisplay.classList.add('teac');
      popupDisplay.classList.remove('admin');
      popupDisplay.classList.remove('stu');
      break;
    case 'student':
      popupDisplay.style.display = "block";
      welcomeMsg.innerHTML = "Welcome Student";
      popupDisplay.classList.add('stu');
      popupDisplay.classList.remove('teac');
      popupDisplay.classList.remove('admin');
      break;
    default:
      console.log("not Found");
      break;
  }

}

function popupClose() {
  var popupDisplay = document.querySelector(".popup-container");
  popupDisplay.style.display = "none";
}

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