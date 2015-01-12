<?php

  function login($username, $password) {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM registered WHERE username = ? AND password = ?');
    $stmt->execute(array($username, $password));  

    return $stmt->fetch() == true;
  }

  function getUser($username){
    global $db;

    $stmt = $db->prepare('SELECT idRegistered FROM registered WHERE username = ?');
    $stmt->execute(array($username));
    $result = $stmt->fetch();

    return $result;

  }

/*
  function userNonRegistered($idNonRegistered){
  	global $db;
    
    $stmt = $db->prepare('SELECT * FROM nonRegistered WHERE idNonRegistered = ?');
    $stmt->execute($idNonRegistered);  

    return $stmt->fetch() !== false;
  }
  */
  function registeUser( $username, $email, $password) {
	global $db;
	
	
	$stmt = $db->prepare('INSERT INTO registered (email, username, password) VALUES (?,?,?)');
	$stmt->execute(array($email, $username, $password));

	return $stmt->fetch() == true;

	}

	function isUsernameTaken($username) {
    global $db;
    $stmt = $db->prepare("SELECT * 
                            FROM registered 
                            WHERE username = ?");
    $stmt->execute(array($username));
    return $stmt->fetch() == true;
  }


  function isEmailTaken($email) {
    global $db;
    $stmt = $db->prepare("SELECT * 
                            FROM registered 
                            WHERE email = ?");
    $stmt->execute(array($email));
    return $stmt->fetch() == true;
  }

/*
	function deleteUser($idRegistered, $email, $username, $password) {
		global $db;
		
		$email = $_GET['email'];
	try{
		$sql = "DELETE FROM registered WHERE email = :email";
		$stmt = $db->query($sql);
		$stmt->bindParam(':email', $email);
		$stmt->execute();
		}catch(PDOException $e) {
	}
	}
	
	function listUsers($idNonRegistered, $idRegistered, $email, $username, $password) {
		global $db;
		
		$stmt = $db->prepare('SELECT * FROM userNonRegistered');
		$stmt = $db->prepare('SELECT * FROM userRegistered');
		$stmt->execute();
		$result = $stmt->fetchall(PDO::FETCH_ASSOC);
		echo json_encode($result);
		catch(PDOException $e)
   }
   echo"ok";
  */
?>