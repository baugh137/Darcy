<?php
session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $_SESSION['presets']['username'] = $username;
  
  if (empty($username)) {
	$_SESSION['messages'][] = "Username is required";
	$bad = true;
  }
  
	if(empty($password)){
		$_SESSION['messages'][]="Password is Required";
		$bad = true;
	}
	
	if (!preg_match('~[0-9]~', $password)||!preg_match('~A-Z]~', $password)){
	$_SESSION['messages'][] = "Password must have at least one number and one uppercase letter.";
	$bad=true;
	}
	
	if($bad){
		header('Location: login.php');
		exit;
	}
	
	require_once 'Dao.php';
	  
	  
	 $dao = new DAO();
	if(isset($_POST['CreateButton'])){
		$user=$dao->getUsername($username);
		if(empty($user)){
			$dao->addUser($username, $password);
			$_SESSION['logged_in']=true;
			header('Location: homepage.php');
			exit;
		}else{
			$_SESSION['messages'][]="That username already exists";
			$_SESSION['logged_in']=false;
			header('Location: login.php');
			exit;
		}
	}else if (isset($_POST['LoginButton'])){
		$login=$dao->getUserPassword($username, $password);
		if(!empty($login)){
			$_SESSION['logged_in']=true;
			header('Location: homepage.php');
			exit;
		}else{
			$_SESSION['messages'][]="Username or Password is incorrect.";
			$_SESSION['logged_in']=false;
			header('Location: login.php');
			exit;
		}
	}
	
	unset($_SESSION['presets']);

  exit;
?>

<!--need to finish edits -->
