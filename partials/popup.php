<?php
include_once "config/db.php";
session_start();

$admin = parse_url('/final/index.php#admin', PHP_URL_FRAGMENT);
$teacher = parse_url('/final/index.php#teacher', PHP_URL_FRAGMENT);
$student = parse_url('/final/index.php#student', PHP_URL_FRAGMENT);

if (isset($_POST['submit']) && $admin) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    if (!$email && !$password) {
        header('Location:index.php?empty');
    } else {
        $query = "SELECT * FROM tbl_admin WHERE tbl_admin.email='$email' AND tbl_admin.password='$password'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $user['email'];
            $_SESSION['user_id'] = $user['id'];
            header('Location:./admin/');
        } else {
            header('Location:index.php');
        }
    }
}


if (isset($_POST['submit']) && $teacher) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    if (!$email && !$password) {
        header('Location:index.php?empty');
    } else {
        $query = "SELECT * FROM tbl_teacher WHERE tbl_teacher.email='$email' AND tbl_teacher.password='$password'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $user['email'];
            $_SESSION['user_id'] = $user['id'];
            header('Location:./teacher');
        } else {
            header('Location:index.php');
        }
    }
}


if (isset($_POST['submit']) && $student) {
    $email = $_POST['email'];
    $password = $_POST['pass'];

    if (!$email && !$password) {
        header('Location:index.php?empty');
    } else {
        $query = "SELECT * FROM tbl_student WHERE tbl_student.email='$email' AND tbl_student.password='$password'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['email'] = $user['email'];
            $_SESSION['user_id'] = $user['id'];
            header('Location:./student');
        } else {
            header('Location:index.php');
        }
    }
}
?>
<div class="popup-container">
    <div class="popup-header">
        <div class="btn btn-menu hover rotate-90 radius-25">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="btn btn-close hover rotate-45 radius-25" type="close" onclick="popupClose()">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="text">
        <span id="welcome-msg"></span>
        <img src="./assest/images/img.jpeg" alt="" class="img">
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