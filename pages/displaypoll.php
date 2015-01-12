<?php

include_once('../database/connection.php');
include_once('../database/users.php');



//echo 'The id from the user is ' . $_GET["id"];



?>


<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>LTW - PollsManager</title>
  <link rel="stylesheet" href="../css/style.css">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="../js/script.js"></script>
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
      theme: "theme2",//theme1
      title:{
        text: "Nome da pergunta"
      },
      data: [
      {
        // Change type to "bar", "splineArea", "area", "spline", "pie",etc.
        type: "bar",
        dataPoints: [
        { label: "Resposta 1", y: 10 },
        { label: "Resposta 2", y: 15 },
        { label: "Resposta 3", y: 25 },
        { label: "Resposta 4", y: 30 },
        { label: "Resposta 5", y: 28 }
        ]
      }
      ]
    });

    chart.render();
  }
  </script>
  <script type="text/javascript" src="../js/canvasjs.min.js"></script>
</head>
<body>
  <section id="PollsManager">
    <header id="header">
      <h1>PollsManager</h1>
    </header>
    <section id="main">
      <form action="../actions/displaypoll.php" method="post">
        <ul id="login-fields" type="none">
          <li id="chartContainer" style="height: 300px; width: 70%; margin-left: 15%;"></li>
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
