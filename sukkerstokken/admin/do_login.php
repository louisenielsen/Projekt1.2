<?php
if(!isset($_POST["send_login"]) and !isset($_POST["username"]) and !isset($_POST["password"])){
	header("location: ../login.php");
}
if(!session_id()){
	session_start();
}

	$username = $_POST["username"];
	$password = $_POST["password"];
	
	if($username == "sukkerstokken" and $password == "1234"){
		$_SESSION["loggedin"] = true;
		header("location: admin.php");	
	}
	
	else{
		header("location: ../login.php?error=Forkert+brugernavn+eller+kodeord");
	}
?>