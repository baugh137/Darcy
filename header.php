<?php
<head>
<link href ="" type="logo" rel="base"/>
</head>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="homepage.php"><img src="Logo.jpg" alt="Darcy Approved, Collin Detected Logo" id="logo" width = "200" height="75"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Dogtectors<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="P&P.php">Pride and Prejudice</a></li>
          <li><a href="Emma.php">Emma</a></li>
          <li><a href="S&S.php">Sense and Sensibility</a></li>
		  <li><a href="mpark.php">Mansfield Park</a></li>
		  <li><a href="nabbey.php">Northanger Abbey</a></li>
		  <li><a href="persuasion.php">Persuasion</a></li>
        </ul>
      </li>
	        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Resources<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="">Quiz</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">FAQ</a></li>
        </ul>
      </li>
	        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="">Mother-In-Law Kit</a></li>
          <li><a href="">Exclusive Wickhams</a></li>
          <li><a href="">Exclusive Collins</a></li>
		  <li><a href="">Exclusive Darcys</a></li>
		  <li><a href="">Books</a></li>
		  <li><a href="">Treats</a></li>
        </ul>
      </li>
	        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Basket<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="">Checkout</a></li>
          <li><a href="">Account</a></li>
          <li><a href="">Privacy Policy</a></li>
		  <li><a href="">Refund Policy</a></li>
		  <li><a href="">Resell Policy</a></li>
		  <li><a href="">Terms of Service</a></li>
		  <li><a href="">Pricing</a></li>
        </ul>
      </li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Navbar With Dropdown</h3>
</div>

</body>
</html>







?>