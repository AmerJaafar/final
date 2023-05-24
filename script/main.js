function togglePassword() {
    var passwordInput = document.getElementById("password");
    var toggleButton = document.getElementById("toggle");

    if (toggleButton.checked) {
      passwordInput.type = "text";
    } else {
      passwordInput.type = "password";
    }
  }


let isAdmin = document.querySelector('#admin').getAttribute("id");
let isTeacher = document.querySelector('#teacher').getAttribute("id")
let isStudent = document.querySelector('#student').getAttribute("id")

function getLoginPopup() {
  if (isAdmin == "admin") {
    console.log("isAdmin:", true);
  } else if (isTeacher == "teacher") {
    console.log("isTeacher:", true);
  } else if (isStudent == "student") {
    console.log("isStudent:", true);
  } else {
    console.log("not found");
  }
}