<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['_id']);
unset($_SESSION['email']);
$_SESSION['sloggedin'] = false;
header('Location: /final/partials/slogin.php');