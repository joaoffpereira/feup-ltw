<?php
	include_once("connection.php");

	try {
		$image = $_POST["image"];

		$stmt = $dbh->prepare(
			'INSERT INTO Question
			(idPoll, question, image)
			VALUES (?,?,?)');
		$stmt->execute(array(
			$idPoll,
			$question,
			$image));
	
	$idQuestion = db2_last_insert_id($dbh);

	for($j=1; isset($_POST['option'.$idQuestion.'-'.$j]); $j++) {
		$option = $_POST['option'.$idQuestion.'-'.$j];
		include("addOption.php");
	}

	} catch(PDOException $e) {
		echo $e->getMessage();
	}
?>