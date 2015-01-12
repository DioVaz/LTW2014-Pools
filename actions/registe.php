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

if(registeUser($_POST['username'], $_POST['email'] , $_POST['password'])){
	header('Location: ../pages/login.php');
 }else{
	//header('Location: ../pages/registeuser.php');
}

?>
