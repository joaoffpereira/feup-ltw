<?php
	include_once("connection.php");

	try {
		$idQuestion = $_POST["idQuestion"];
		$idOption = $_POST["idOption"];

		$stmt = $dbh->prepare(
			'INSERT INTO UserOption
			(idUser, idOption)
			VALUES (?,?)');
		$stmt->execute(array(
			$_SESSION["idUser"],
			$idOption));

		$stmt = $dbh->prepare(
		'UPDATE Option SET new.counter = old.counter + 1  WHERE idOption = ?');
		$stmt->execute(array($idOption));
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	/*header("Location: ../../index.php");
	exit;*/
?>
