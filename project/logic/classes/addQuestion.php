<?php
	include_once("connection.php");

	try {
		$idPoll = $_POST["idPoll"];
		$question = $_POST["question"];
		$image = $_POST["image"];

		$stmt = $dbh->prepare(
			'INSERT INTO Question
			(idPoll, question, image)
			VALUES (?,?,?)');
		$stmt->execute(array(
			$idPoll,
			$question,
			$image));
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	header("Location: ../../index.php");
	exit;
?>