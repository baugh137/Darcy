	<?php
		session_start();
		if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
			header('Location: index.php');
			exit;
		}
		require_once 'Dao.php';
		$dao = new Dao();
		$id = $_SESSION['username'];
		$dog = 'Akita Dog from Persuasion';
		$cost = '$10';
		$dao->addUserPurchase($id, $dog, $cost);
		 	
		
		header('Location: checkout.php');
?>