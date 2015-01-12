<?php

//Return all polls
function getPolls(){
	global $db;
   $stmt = $db->prepare('SELECT * FROM poll');
   $stmt->execute();
   return $stmt->fetchAll();
}

function getPollsFromUser($idRegistered){
  global $db;
  $stmt = $db->prepare('SELECT * FROM poll WHERE idRegistered = ?');
  $stmt->execute(array($idRegistered));
  return $stmt->fetchAll();
}


function getPollFromId($idPoll){
  global $db;
  $stmt = $db->prepare('SELECT * FROM poll WHERE idPoll = ?');
  $stmt->execute(array($idPoll));
  return $stmt->fetchAll();

}

function getPoll($question){
    global $db;
    $stmt = $db->prepare('SELECT idPoll FROM poll WHERE question = ?');
    $stmt->execute(array($question));
    $result = $stmt->fetch();

    return $result;
}

function getOwner ($idPoll, $idRegistered){
    global $db;
    $stmt = $db->prepare('SELECT idRegistered FROM poll WHERE idPoll = ? AND idRegistered = ?');
    $stmt->execute(array($idPoll, $idRegistered));
    return $stmt->fetch() == true;

}


//Create a poll
function createPoll($question, $img, $idRegistered){
    global $db;
    $stmt = $db->prepare('INSERT INTO poll (question, img ,idRegistered) VALUES (?, ?, ?)');
    $stmt->execute(array($question, $img, $idRegistered));
}

function addAnswer($answer, $idPoll){
   global $db;
    $stmt = $db->prepare('INSERT INTO answer (text, idPoll) VALUES (?,  ?)');
    $stmt->execute(array($idPoll, $answer));
}


//Get Answers from a poll
function getAnswers($idPoll){
	 global $db;
   	$stmt = $db->prepare('SELECT *  FROM answer WHERE idPoll = ?');
   	$stmt->execute(array($idPoll));
  	return $stmt->fetchAll();
}

 function incrementVote($idAnswer, $idUser, $idPoll){
    global $db;
    $stmt = $db->prepare('UPDATE answer SET votes = votes+1 WHERE idAnswer=?');
    $stmt->execute(array($idAnswer));

    $st = $db->prepare("INSERT INTO userPoll (idUser, idPoll) VALUES (? , ?)");
    $st->execute(array($idUser, $idPoll));
 }

  function alreadyVoted($idPoll, $idUser){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM userPoll WHERE idPoll=? AND idUser=?");
    $stmt->execute(array($idPoll, $idUser));
    return $stmt->fetch()== true;
 }

 function search($word){
    global $db;
    $stmt = $db->prepare("SELECT *  FROM poll WHERE question LIKE '%?%'");
    $stmt->execute(array($word));
    return $stmt->fetchAll();
 }


?>
