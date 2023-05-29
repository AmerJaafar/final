<?php
session_start();
unset($_SESSION['_id']);
unset($_SESSION['email']);
$_SESSION['aloggedin'] = false;
header('Location: /final/');