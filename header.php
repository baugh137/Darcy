
<head>
<link href ="" type="logo" rel="base"/>
</head>
  	<?php 
		session_start();
		if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
			header('Location: index.php');
			exit;
		}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="base.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<div class="page-header">
<a href="homepage.php">
<img src="images/Logo.jpg" alt="Darcy Approved, Collin Detected Logo" id="logo" width = "300" height="100" >
</a>
</div>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="homepage.php" ></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="homepage.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Dogtectors<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="P&P.php">Pride and Prejudice</a></li>
          <li><a href="emma.php">Emma</a></li>
          <li><a href="S&S.php">Sense and Sensibility</a></li>
		  <li><a href="mpark.php">Mansfield Park</a></li>
		  <li><a href="nabbey.php">Northanger Abbey</a></li>
		  <li><a href="persuasion.php">Persuasion</a></li>
        </ul>
      </li>
	        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Resources<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="quiz.php">Quiz</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="faq.php">FAQ</a></li>
        </ul>
      </li>
	        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="mlawkits.php">Mother-In-Law Kit</a></li>
          <li><a href="exwicks.php">Exclusive Wickhams</a></li>
          <li><a href="excollins.php">Exclusive Collins</a></li>
		  <li><a href="exdarcys.php">Exclusive Darcys</a></li>
		  <li><a href="books.php">Books</a></li>
		  <li><a href="treats.php">Treats</a></li>
        </ul>
      </li>
	        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Basket<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="checkout.php">Checkout</a></li>
          <li><a href="useraccount.php">Account</a></li>
          <li><a href="privypoly.php">Privacy Policy</a></li>
		  <li><a href="refundpoly.php">Refund Policy</a></li>
		  <li><a href="resellpoly.php">Resell Policy</a></li>
		  <li><a href="termserv.php">Terms of Service</a></li>
		  <li><a href="pricingpage.php">Pricing</a></li>
        </ul>
      </li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

</body>
</html>







