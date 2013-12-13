<?php
	if(!session_id()){
		session_start();
	}
	session_destroy();
	header("location: ../login.php?besked=Du+er+nu+logget+ud");
?>
