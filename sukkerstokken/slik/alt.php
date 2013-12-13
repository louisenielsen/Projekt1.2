<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SukkerStokken</title>
		<link rel="shortcut icon" href="images/favicon.png"/>
        <link rel="stylesheet" href="../css/reset.css"/>
        <link rel="stylesheet" href="../css/mobile.css"/>
        <link rel="stylesheet" href="../css/tablet.css"/>
        <link rel="stylesheet" href="../css/desktop.css"/>
</head>
<body>
	<div id="wrapper">
        <header>
            <a href="../index.php"><img src="../images/logomobile.png" alt="logo"/></a> 
        </header>
    
        <article>
		<?php 
			$billeder = scandir("../php-images/alt");
			foreach($billeder as $billede){
				$first_char = substr($billede, 0, 1);
				if($first_char == "." or $first_char == "_"){
					continue;	
				}
				
				$billedinfo = getimagesize("../php-images/alt/$billede");
				if($billedinfo){
					$billede_split = explode(".", $billede);
					$billede_link = $billede_split[0] . ".html";
					echo "<div class='images'><a href='$billede_link'><img src='../php-images/alt/$billeder'></a></div>";	
				}
			}
		?>
        </article>
        
        <footer>
        
        </footer>

        
	</div>
</body>
</html>
