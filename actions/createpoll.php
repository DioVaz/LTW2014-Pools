<?php
	include_once('../database/connection.php');
	include_once('../database/poll.php');
	include_once('../database/users.php');


if(!isset($_SESSION['username'] ))
header('Location: ../pages/login.php');


$question = $_POST['question'];
$pic = $_POST['srcpicture'];


 $idUser = $_SESSION['username'] ; 

createPoll($question, $pic, $idUser);
$idPoll = getPoll($question);

foreach($idPoll as $key2 => $value2){
	echo $value2 . "<br />";

	foreach ($_POST['answer']  as $key => $value) {
    echo $value . "<br />";
    addAnswer($value2, $value);
	}
	header('Location: ../pages/poll.php?id=' . $value2);
}


?>
