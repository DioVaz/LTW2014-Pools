<?php
	include_once('../database/connection.php');
	include_once('../database/poll.php');
	include_once('../database/users.php');

$id=$_GET["id"];
$poll = getPollFromId($id);
$answers = getAnswers($id);


?>

<!DOCTYPE html>
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
      <h1>Login</h1>
    </header>
    <section id="main">

      <form  action="../pages/search.php" method="post">
        <div>
          <label for="Search ">Search:</label> 
          <div >
            <input type="text" id="keyword" name="keyword">
          </div>
        </div>
        </form>

      <form action="../actions/vote.php"  method="post">
        <?php
        	foreach ($poll as $p){
        echo('
        <ul id="login-fields" type="none">
          <li><img src= '. $p['img'] .' alt="pollpic" style="width:304px;height:228px"></li>
          <li><h6>'.$p['question'].'<h6>' );

        foreach ($answers as $a) {
          	echo( '<li><input type="checkbox" id="answer" name="answer[]" value="'. $a['text']  .'" class="toggle"><h6>' . $a['text'] . '<h6></li>' );
          }

          echo('<li><input type="submit" class="button" value="Submit"></li>
          	<li><input type="hidden" name="id" value='.$id.'></li>
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
