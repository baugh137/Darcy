<html>
	<head>
	<title>Darcy Approved, Collins Detected: Checkout</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Acme|Caveat|Cedarville+Cursive|Dancing+Script|Great+Vibes" rel="stylesheet" type="text/css">

	
	</head>
	<body>
	<?php include "header.php"; ?>
	<?php
	session_start();
		if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
			header('Location: index.php');
			exit;
		}
		require_once 'Dao.php';
		$dao = new Dao();
		$username = $_SESSION['username'];
		$dog = $dao->getUserPurchase($dog);
		
		?>
		<div class="text_body">
		<p>Congratulations!</p>
		<p>You have selected
		<?php 
			
			 echo ".htmlentities($dog['dog']).";
		 
		 ?>  <br> He only costs 
		 <?php
		 echo ".htmlentities($dog['cost']).";
		 ?>
		 </p>
		 
		 
		
		<?php include "footer.php"; ?>
	</body>
</html>