function $login_bar()
{

  var islogin= "<?php echo $_SESSION['username'] ?>"; //boolean - true if user is logged in
  if(islogin.length>0) { //must be !==true
    $('#footer').append('<section id="userID"><a href="login.php">login</a></section>');
  }
  else{
    $('#footer').append('<section id="userID"><a href="logout.php">'+"<?php echo $_SESSION['username'] ?>"+'</a></section>');
  }
}

$(document).ready(function(){
  $('#footer').append('<section id="home"><a href="newpoll.php">newPoll</a></section>');
  $login_bar();
  $('#footer').append('<section id="stats"><a href="myPolls.php">myPolls</a></section>');
  $('#footer').append('<section id="stats"><a href="logout.php">logout</a></section>');
});
