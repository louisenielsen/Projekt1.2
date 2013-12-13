<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="css/mobile.css"/>
</head>

<body>
	<?php
		if(isset($_GET["error"])){
			echo "<h1>" . $_GET["error"];
		}
	?>
    <article>
        <form action="admin/do_login.php" method="post">
        	<label id="question" for="question"><h2>Log in</h2></label>
            <input type="text"  required name="username"  placeholder="Indtast brugernavn" />
            <input type="password" required name="password"  placeholder="Indtast kodeord" />
            <input type="submit" name="send_login" value="Login" class="submit" />
        </form>
    </article>
</body>
</html>
