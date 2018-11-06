<?php
session_start();
session_destroy();
header('Location: Darcy/login.php');
exit;
?>