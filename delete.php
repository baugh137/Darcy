<?php
$userID = $_GET['userID'];
require_once 'Dao.php';
$dao = new Dao();
$dao->deleteComment($userID);
header('Location: comment.php');
exit;
?>