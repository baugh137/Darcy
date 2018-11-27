	<?php
		$dao = new Dao();
		$id = $_SESSION['username'];
		$dog = 'Scottish Deerhound Dog from Pride and Prejudice';
		$cost = '$10';
		$dao->addUserPurchase($id, $dog, $cost);
		 	
		
		header('Location: checkout.php');
?>