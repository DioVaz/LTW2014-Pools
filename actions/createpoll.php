<?php
	include_once('../database/connection.php');
	include_once('../database/poll.php');
	include_once('../database/users.php');


$question = $_POST['question'];
$pic = $_POST['srcpicture'];

$username = $_SESSION['username'];


$idUser = getUserId($username);

createPoll($question, $pic, $idUser);
$idPoll = getPoll($question);

foreach($idPoll as $key2 => $value2){
	echo $value2 . "<br />";
	foreach ($_POST['answer']  as $key => $value) {
    echo $value . "<br />";
    addAnswer($value, $value2);
	}
}

foreach($idPoll as $key2 => $value2){
//header('Location: ../pages/poll.php?id=' . $value2);
$message = 'This is a message.';


}

?>
