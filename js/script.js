function $login_bar()
{

  var islogin; //boolean - true if user is logged in
  if(isset($_SESSION['username']) && !empty($_SESSION['username'])) { //must be !==true
    $('#footer').append('<section id="userID"><a href="login.php">login</a></section>');
  }
  else{
    $('#footer').append('<section id="userID"><a href="logout.php">'+$_SESSION['username']+'</a></section>');
    $('#footer').append('<section id="stats"><a href="stats.php">Pools</a></section>');
  }
}

$(document).ready(function(){
  $('#footer').append('<section id="home"><a href="create_poll.php">home</a></section>');
  $login_bar();
});
