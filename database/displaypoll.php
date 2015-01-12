<?php

include_once('../database/connection.php');
include_once('../database/poll.php');
include_once('../database/users.php');




$idRegistered = $_SESSION['idUser'];

getPollUser($idRegistered);


foreach($idRegistered as $key2 => $value2){
  echo $value2 . "<br />";
  foreach ($result as $key => $value) {
    echo $value . "<br />";
  }
}

foreach($idRegistered as $key2 => $value2){
  header('Location: ../pages/displaypoll.php?id=' . $value2);
}


?>
