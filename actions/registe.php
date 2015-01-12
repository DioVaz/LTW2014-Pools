<?php
	include_once('../database/connection.php');
	include_once('../database/poll.php');
	include_once('../database/users.php');


  if(isUsernameTaken($_POST['username'])) {
	header('Location: ../pages/registeuser.php?username=false');
   }

 if(isEmailTaken($_POST['email']) ) {
	header('Location: ../pages/registeuser.php?email=false');
   }

if(registeUser( $_POST['email'], $_POST['username'] , $_POST['password'])){
	header('Location: ../pages/login.php');
 }else{
	var_dump($_POST['username']);
	var_dump($_POST['email']);
	var_dump($_POST['password']);
	//header('Location: ../pages/registeuser.php');
}

?>
