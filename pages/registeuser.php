<?php

	include_once('../database/connection.php');
	include_once('../database/users.php');

if (isset($_GET["username"])){
	echo '<script language="javascript">';
	echo 'alert("Username already taken")';
	echo '</script>';
}

if (isset($_GET["email"])){
	echo '<script language="javascript">';
	echo 'alert("Email already exists on database")';
	echo '</script>';
}
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
			<h1>Sign Up</h1>
		</header>
		<section id="main">
			<form action="../actions/registe.php" method="post">
				<ul id="login-fields" type="none">
					<li><h6>Username: </h6><input type="text" name="username" value="your name"></li>
					<li><h6>E-mail: </h6><input type="email" name="email" value="something@mail.com"></li>
					<li><h6>Password: </h6><input type="password" name="password" value="12345"></li>
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
