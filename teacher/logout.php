<?php
session_start();
unset($_SESSION['_id']);
unset($_SESSION['email']);
$_SESSION['tloggedin'] = false;
header('Location: /final/partials/tlogin.php');