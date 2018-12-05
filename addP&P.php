	<?php
		session_start();
		if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
			header('Location: index.php');
			exit;
		}
		require_once 'Dao.php';
		$dao = new Dao();
		$username = $_SESSION['username'];
		$dog = 'Scottish Deerhound Dog from Pride and Prejudice';
		$cost = '$10';
		$dao->addUserPurchase($username, $dog, $cost);
		 	
		
		header('Location: checkout.php');
?>