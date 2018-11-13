<html lang="en">
<?php
session_start();
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']);
?>
<head>
<title>Darcy Approved, Collins Detected: Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="login.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Acme|Caveat|Cedarville+Cursive|Dancing+Script|Great+Vibes" rel="stylesheet" type="text/css">

</head>
<body>


<?php if(!empty($message)) { ?>
<div class="message"><?php echo $message; ?></div>
<?php } ?>

 <?php if (isset($_SESSION['messages'])) {
          foreach ($_SESSION['messages'] as $message) {?>
            <div id = "error">
              <?php echo $message; ?>
            </div>

            <?php  }
            unset($_SESSION['messages']);
            ?>
          <?php } ?>

<div class="container1">
<div id="img">
 <img src="images/Logo.jpg" alt="Darcy Approved, Collin Detected Logo" class="avatar">
</div>
<div id="button">
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
</div>
<div id="id01" class="modal">
  <form class="modal-content animate" method="POST" action="login_handler.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/Logo.jpg" alt="Darcy Approved, Collin Detected Logo" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required value="<?php echo isset($_SESSION['presets']['username']) ? $_SESSION['presets']['username']:''; ?>"
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" value="Login" name="LoginButton">Login</button>
	  <button type="submit" value="CreateAccount" name="CreateButton">Create Account</button>
<!--      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>  -->
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"></span>
    </div>
  </form>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  <?php include "login_footer.php"; ?> 

	
</body>
</html>


