<?php
	include_once('../database/connection.php');
	include_once('../database/poll.php');
	include_once('../database/users.php');


$answer = $_POST["answer"];
$id = $_POST["id"];


$allAnswers = getAnswers($id);


if(isset($_COOKIE[$id])){
	echo "already voted!";

}else{

foreach ($allAnswers as $key => $answer2 ) {
	if(in_array($answer2['text'],$answer)){
		$key2 = $key + 1;
		incrementVote($key2 , 1, $id);
  		echo $answer2['text'] . " was checked!";
	}
}
	setcookie($id, 1, time()+60*60*24*365, "/");
	$_COOKIE[$id] = 1;
}

header('Location: ../pages/results.php?id='. $id);

?>
