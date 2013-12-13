<?php
	if(!session_id()){
		session_start();
	}
	if(!isset($_SESSION["loggedin"])){
		header("location: ../login.php");
	}
?>
<?php
		$question_line = $_POST["question_line"];
		$questions = file("../data/questions.txt");
		$answers = file("../data/answers.txt");
		
		unset($questions[$question_line]);
		unset($answers[$question_line]);
		$questions_text = trim(implode("", $questions));
		$answers_text = trim(implode("", $answers));
		
		file_put_contents("../data/questions.txt", $questions_text);
		file_put_contents("../data/answers.txt", $answers_text);
		header("location: admin.php");
?>
