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
  </head>
  <body>
   
  <form action="../actions/createpoll.php" method="post">
      <header id="header">
        <h1>pollsManager</h1>
        <input type="text" id="new-poll" name="question" placeholder="What do you want to ask?" />
      </header>

      <section id="main">
        <ol id="answer-list" type="A">
          <li class="answer" id="answerA">
            <input type="checkbox" class="toggle">
            <input type="text" id="new-poll" name="answer[]" placeholder="Answer - A" />
          </li>

          <li class="answer" id="answerB">
            <input type="checkbox" class="toggle">
            <input type="text" id="new-poll" name="answer[]"  placeholder="Answer - B" />
          </li>

          <li class="answer" id="answerC">
            <input type="checkbox" class="toggle">
            <input type="text" id="new-poll" name="answer[]"  placeholder="Answer - C" />
          </li>

          <li class="answer" id="answerD">
            <input type="checkbox" class="toggle">
            <input type="text" id="new-poll" name="answer[]"  placeholder="Answer - D" />
          </li>
        </ol>
      </section>
      <div class="control">
        <input id="Idpicture" name="srcpicture" type="text">
      </div>

      <section id="Buttons">
        <input type="checkbox" id="allowtoggle-all"> Allow multiple check<br>
        <button class="complete">Complete</button>
      </section>


    </form>

    <footer id="footer">
      <p>Trabalho realizado por: </p>
    </footer>
  </body>
</html>
