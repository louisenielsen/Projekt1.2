<?php
	if(!session_id()){
		session_start();
	}
	if(!isset($_SESSION["loggedin"])){
		header("location: ../login.php");
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin</title>
<link rel="stylesheet" href="css/mobile.css"/>

</head>

<body>
	<article>
    <form id="upload" action="../tilbud.php" method="post" enctype="multipart/form-data">
        <label><p>Upload et tilbud</p><input type="file" name="image" id="image" placeholder="Upload tilbud" value="Upload"/>
        </label>
        <input type="submit" name="submit" value="Opret tilbud" class="submit">
	</form>
    <br>
        <form action="logout.php" method="post">
                <input type="submit" name="logout" value="Log ud" class="submit" />
        </form>
        
      
   </article>
</body>
</html>
