<?php
session_start();
unset($_SESSION['_id']);
unset($_SESSION['email']);
session_abort();
header('Location:../index.php');