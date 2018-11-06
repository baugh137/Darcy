<!DOCTYPE html>
<html lang="en">
<!--
Denise Baugh - CS 401 
-->
     <head>
		<title>Darcy Approved, Collins Detected: User Account</title>
             <meta charset="UTF-8">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
          <meta name="viewport" content="width=device-width, initial-scale=1">
   
		<link href="https://fonts.googleapis.com/css?family=Acme|Caveat|Cedarville+Cursive|Dancing+Script|Great+Vibes" rel="stylesheet" type='text/css'>
        
       <link href="useraccount.css" rel="stylesheet">
	 
    </head>	  

<body>
    <?php include "header.php"; ?>  


<div class="userinfo">
<form action="">
User name:<br>
<input type="text" name="userid">
<br>
User password:<br>
<input type="password" name="psw">
</form>
</div>

  
  
<div class="userImg">
<img src="Images/odious-mr-collins.jpg" alt="user image" width="100" height="75">
</div>

<div class="interests">
<form>
Your Interest<br>
  <input type="radio" name="interest" value="Pride & Prejudice" checked> Pride & Prejudice<br>
  <input type="radio" name="interest" value="Sense & Sensibility"> Sense & Sensibility<br>
  <input type="radio" name="interest" value="Emma"> Emma<br>
  <input type="radio" name="interest" value="Mansfield Park"> Mansfield Park<br>
  <input type="radio" name="interest" value="Persuasion"> Persuasion<br>
  <input type="radio" name="interest" value="Northanger Abbey"> Northanger Abbey<br>
<input type="submit" value="Submit">
  </form>
</div>

<div class="userComments">
<form action ="">
Your Comments:<br>
<input type="text" name="usercomments"><br>
<input type="submit" value="Submit"><br>
  <input type="reset">
  </form>
</div>
 
        
 <?php include "footer.php"; ?> 

 
</body>
</html>