
<html>
	<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
	<h3>This adorable buddy is ready to come home and be your best friend to help
		protect you and help you while becoming a new member of your family.</h3>
	<div class="takehome">
<div class="container">
  <h2>Ready to take him home?</h2>
  <a href="checkout.php" class="btn btn-info" role="button">Add to Basket</a>
  <input type="submit" class="btn btn-info" value="Submit Button">
</div>	
</div>
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
		<?php
		
		?>
	
	</body>
</html>

<?php

?>

