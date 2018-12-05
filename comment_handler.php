<?php
session_start();
$username = $_POST['username'];
$userComment = $_POST['userComment'];
$_SESSION['presets']['username'] = $username;
$_SESSION['presets']['userComment'] = $userComment;

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
  header('Location: comment.php');
  $_SESSION['validated'] = 'bad';
  exit;
}
//validated
$_SESSION['messages'][] = "Thanks for posting!";
$_SESSION['validated'] = 'validated';

unset($_SESSION['presets']);

require_once 'Dao.php';
$dao = new Dao();
$dao->saveComment($username, $userComment);

header('useraccount.php');
exit;

?>