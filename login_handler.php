<?php
session_start();
  $login = $_POST['login'];
  $password = $_POST['password'];
  if ($login == '' && $password == '') {
    $_SESSION['logged_in'] = true;
    header('Location: http://Darcy/index.php');
    exit;
  }
  $_SESSION['logged_in'] = false;
  $_SESSION['message'] = "Username or password invalid";
  header('Location: Darcy/login.php');
  exit;
?>

/*need to finish edits */
