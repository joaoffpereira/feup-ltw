<?php
	include_once("connection.php");

	try {
		
		$stmt = $dbh->prepare(
			'INSERT INTO Option
			(idQuestion, option)
			VALUES (?,?)');

		$stmt->execute(array(
			$idQuestion,
			$option));

	} catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
