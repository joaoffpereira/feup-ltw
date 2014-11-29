<?php
	include_once("connection.php");

	try {

		$stmt = $dbh->prepare(
			'SELECT * FROM Poll
			WHERE idUser = ?');
		$stmt->execute(array(
			$_SESSION['idUser']));


		$polls = $stmt->fetchAll();

		foreach ($polls as &$currentPoll) {
			$idPoll = $currentPoll['idPoll'];
			
			include("getMyQuestions.php");

			$currentPoll['questions'] = $questions;
		}

	} catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
