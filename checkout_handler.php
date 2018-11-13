<?php
session_start();
$checkoutvalue = $_POST['purchase'];
$messages = array();
require_once 'Dao.php';
$dao = new DAO();
if(isset($_POST['SubmitDog'])){
  $dao->savePurchase($userpurchasedog);
  $_SESSION['messages'][]="Great choice! Thank you!";
}
?>