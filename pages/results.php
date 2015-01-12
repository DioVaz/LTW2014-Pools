<?php
	include_once('../database/connection.php');
	include_once('../database/poll.php');
	include_once('../database/users.php');


$id = $_GET["id"];

if(isset($_SESSION['username'])){
$nome = $_SESSION['username'];
$arrayIdUser = getUser($nome);

$idUser = $arrayIdUser["idRegistered"];
}else{
$idUser = -1;
}

$allAnswers = getAnswers($id);




if(isset($_COOKIE[$id]) || getOwner($idUser, $id)){
	echo 'You have permission';

foreach ($allAnswers as $key => $answer2 ) {
  		echo $answer2['text'] . " has " . $answer2['votes' ]. 'votes!';
	
	}

}else{
	echo 'Dont have permission';
}


?>
