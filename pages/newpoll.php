<?php

  include_once('../database/connection.php');
  include_once('../database/users.php');


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
        <h1>pollsManager</h1>
       
      </header>

      <section id="main">
        <form action="../actions/createpoll.php" method="post">

        <input type="text" id="new-poll" name="question" placeholder="What do you want to ask?" />
        
        <ul id="answer-list" type="A">
          <li class="answer" id="answerA">

            <input type="text" id="new-poll" name="answer[]" placeholder="Answer - A" />
          </li>

          <li class="answer" id="answerB">

            <input type="text" id="new-poll" name="answer[]"  placeholder="Answer - B" />
          </li>

          <li class="answer" id="answerC">

            <input type="text" id="new-poll" name="answer[]"  placeholder="Answer - C" />
          </li>

          <li class="answer" id="answerD">

            <input type="text" id="new-poll" name="answer[]"  placeholder="Answer - D" />
          </li>
          <li><input id="Idpicture" name="srcpicture" type="text"></li>

          <li><input type="checkbox" id="allowtoggle-all"> Allow multiple check</li>
          <li><input type="submit" value="Submit"></button></li>
          <li> ...</li>
          <li>...</li>
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
