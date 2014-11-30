<?php
	include_once("connection.php");

	try {

		$stmt = $dbh->prepare(
			'SELECT idQuestion, question FROM Question
			WHERE idPoll = ?');

		$stmt->execute(array($idPoll));

		$questions = $stmt->fetchAll();

		foreach ($questions as &$currentQuestion) {
			$idQuestion = $currentQuestion['idQuestion'];
			include("getQuestionOptions.php");
			$currentQuestion['options'] = $options;
		}

	} catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
