<?php
include_once "./header.php";
include_once "../config/db.php";

if (isset($_POST['submit']) ) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    if (!$email && !$password) {
        header('Location:../partials/slogin.php#empty');
    } else {
        $query = "SELECT * FROM tbl_student WHERE tbl_student.email='$email' AND tbl_student.password='$password'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['sloggedin'] = true;
            header('Location:../student');
        } else {
            header('Location:../partials/slogin.php#erorr');
        }
    }
}
?>

<div class="popup-container">
    <div class="text">
        <span id="welcome-msg">welcom student</span>
        <img src="../assest/images/img.jpeg" alt="" class="img">
        <form method="post">
            <div class="input-field">
                <div class="label">
                    <i class="fa-solid fa-envelope icon"></i>
                    <input type="email" name="email" id="email">
                </div>
            </div>
            <div class="input-field">
                <div class="label label-pass">
                    <i class="fa-solid fa-lock icon"></i>
                    <input type="password" name="pass" id="pass">
                    <i class="fa-solid fa-eye action-icon show-pass" onclick="togglePassword()"></i>
                    <i class="fa-solid fa-eye-slash action-icon show-pass" onclick="togglePassword()"></i>
                </div>

                <small class="forget-pass">
                    <a>Forget Password?</a>
                </small>
            </div>
            <div class="btn-container">
                <div class="btn btn-submit">
                    <input type="submit" value="Login" name="submit">
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once "./footer.php"?>