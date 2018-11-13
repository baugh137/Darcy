<?php
session_start();
$name = $_POST['username'];
$comment = $_POST['comments'];
$_SESSION['presets']['username'] = $name;
$_SESSION['presets']['comments'] = $comments;

$messages = array();
$presets = array();
$bad = false;
if (empty($name)) {
  $_SESSION['messages'][] = "Name is required.";
  $bad = true;
}
if (empty($comment)) {
  $_SESSION['messages'][] = "Comment is required.";
  $bad = true;
}
if ($bad) {
  header('Location: comments.php');
  $_SESSION['validated'] = 'bad';
  exit;
}
//validated
$_SESSION['messages'][] = "Thanks for posting!";
$_SESSION['validated'] = 'validated';
unset($_SESSION['presets']);
require_once 'Dao.php';
$dao = new Dao();
$dao->saveComment($name, $comment);
header('homepage.php');
exit;

?>