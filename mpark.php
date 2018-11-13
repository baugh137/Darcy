<html>
	<head>
	<title>Darcy Approved, Collins Detected: Mansfield Park Dogtectors</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	    <link href="base.css" type="text/css" rel="stylesheet" />
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Acme|Caveat|Cedarville+Cursive|Dancing+Script|Great+Vibes" rel="stylesheet" type="text/css">

  
  	<?php $thisPage = "dogpurchase";
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
		header('Location: index.php');
		exit;
	}
require_once "Dao.php";
$dao = new Dao();
$userpurchase = $dao->getUserpurchase();

?>
 
	</head>
	<body>
 		<?php include "header.php"; ?>
		 <img src="images/ebertram.jpg" class="img-rounded" alt="Edmund Bertram" width="304" height="236"> 
		<img src="images/bluetick pup.jpg" class="img-rounded" alt="Bluetick Coonhound Dog" width="304" height="236"> 
		<img src="images/hcrawford.jpg" class="img-rounded" alt="Henry Crawford" width="304" height="236">
  <h1> Mansfield Park</h1>
		  
	<h3>This adorable buddy is ready to come home and be your best friend to help
		protect you and help you while becoming a new member of your family.</h3>
	<div class="takehome">
<div class="container">
  <h2>Ready to take him home?</h2>
  <a href="checkout.php" class="btn btn-info" role="button">Add to Basket</a>
  <!--<input type="submit" class="btn btn-info" value="Submit Button"> -->
</div>	
</div>
		<?php
			foreach ($userpurchase as $userpurchase) {
			($userpurchasedog['Bluetick Coonhound Dog from Mansfield Park'])
			}
		?>
	
		<?php include "footer.php"; ?>
	</body>
</html>
<!-- Edmund Bertram (bluetick coonhound)

Henry Crawford
-->