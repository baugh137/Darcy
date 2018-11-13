<?php
$userid = $_GET['userid'];
require_once 'Dao.php';
$dao = new Dao();
$dao->deleteComment($userid);
header('Location: comments.php');
exit;
?>