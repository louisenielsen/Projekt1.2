<?php
if(session_id()){
	session_start();
}
if(isset($_SESSION["loggedin"])){
	header("location: ../login.php");
}
?>
<?php
		$question = $_POST["question"];
		$answer = $_POST["answer"];  
		
		$questions = file_get_contents("../data/questions.txt");
		$answers = file_get_contents("../data/answers.txt");

		if(empty($questions)){
			$linebreak = "";
		}
		else{
			$linebreak = "\n";
		}
		
		if(empty($answers)){
			$linebreak = "";
		}
		else{
			$linebreak = "\n";
		}
		
		$questions .= "$linebreak$question";
		$answers .= "$linebreak$answer";
		
		file_put_contents("../data/questions.txt", $questions);
		file_put_contents("../data/answers.txt", $answers);
		header("location: admin.php");
?>
	