<?php

include_once('../database/connection.php');
include_once('../database/users.php');
include_once('../database/poll.php');

$user = $_SESSION['username'];
$idU = getUserId($user);

foreach ($idU as $key => $value) {
  $polls = getPollFromId($value);
}


?>


<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>LTW - PollsManager</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="../js/script.js"></script>
</head>
<body>
  <section id="PollsManager">
    <header id="header">
      <h1>Your Polls</h1>
    </header>
    <section id="main">
      <form action=# method="post">
       <?php
          foreach ($polls as $p){
        echo('
        <ul id="login-fields" type="none">
          <li><h6> <a href="../pages/results.php?id=' . $p['idPoll'] . '">' . $p['question'] . '</a><h6></li> ');

          echo('<li><input type="submit" class="button" value="Submit"></li>
            <li><input type="hidden" name="id" value='.$p['idPoll'].'></li>
          <li>***</li>
        </ul>
       ');
           }
           ?>
      </form>
      <footer id="footer"></footer>
    </section>

  </section>
  <section id="foot">
    <p>Trabalho realizado por: </p>
    <p>Grupo X Turma Y </p>
    <p>2014</p>
  </section>
</body>
</html>
