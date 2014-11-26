<?php
	include_once("connection.php");

	try {
		$idQuestion = $_POST["idQuestion"];
		$option = $_POST["option"];

		$stmt = $dbh->prepare(
			'INSERT INTO Option
			(idQuestion, counter, option)
			VALUES (?,?,?)');
		$stmt->execute(array(
			$idQuestion,
			0,
			$option));
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	header("Location: ../../index.php");
	exit;
?>