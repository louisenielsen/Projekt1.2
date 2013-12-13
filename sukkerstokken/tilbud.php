<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SukkerStokken</title>
		<link rel="shortcut icon" href="images/favicon.png"/>
        <link rel="stylesheet" href="css/reset.css"/>
        <link rel="stylesheet" href="css/mobile.css"/>
        <link rel="stylesheet" href="css/tablet.css"/>
        <link rel="stylesheet" href="css/desktop.css"/>
</head>
<body>
	<div id="wrapper">
        <header>
            <a href="index.php"><img src="images/logomobile.png" alt="logo"/></a> 
        </header>
    
        <article>
		
<?php
		$_SESSION["image_name"] = $_FILES["image"]["name"]; 
		$_SESSION["tmp_name"] = $_FILES["image"]["tmp_name"];
		
		//uploading af billede
	$image_name = $_SESSION['image_name'];
	
	$tmp_name = $_SESSION["tmp_name"]; //gemt imidlertidigt på harddisken 
	
			
	  if(move_uploaded_file($tmp_name, "data/$image_name")){
		echo "<h3>Her er dit billede</h3>";
		echo "<p><img src='data/$image_name' /></p>";
	} else {
		echo "<h3>$image_name kunne ikke uploades</h3>";
	} 
	
?>
        </article>
        
        <footer>
        	<a href="http://goo.gl/SiDldq"><img src="images/find-os.png" alt="link til google maps"/></a> 
        </footer>

        
	</div>
</body>
</html>
