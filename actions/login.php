<?php
	include_once('../database/connection.php');
	include_once('../database/users.php');


if (login($_POST['username'], $_POST['password']) ){
 	 $_SESSION['username'] = $_POST['username'];
 	 //echo($_SESSION['username']);
 	header('Location: ../pages/myPolls.php');

 }else{
	  header('Location: ../pages/login.php?login=false');
}

?>
