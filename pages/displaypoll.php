<?php

include_once('../database/connection.php');
include_once('../database/users.php');



echo 'The id from the user is ' . $_GET["id"];



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
      <h1>PollsManager</h1>
    </header>
    <section id="main">
      <form action="../actions/displaypoll.php" method="post">
        <ul id="login-fields" type="none">
          <li><a href="linkdapoll.com">Nome da poll</a></li>
          <li><input type="submit" class="button" value="Submit"></li>
          <li>***</li>

        </ul>
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
