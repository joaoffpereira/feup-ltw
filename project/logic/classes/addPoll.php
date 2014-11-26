<?php
	include_once("connection.php");

	try {
		$question = $_POST["question"];
		$isPublic = $_POST["isPublic"];
		$anyoneCanAddOptions = $_POST["anyoneCanAddOptions"];
		$idCategory = $_POST["idCategory"];
		$image = $_POST["image"];

		$stmt = $dbh->prepare(
			'INSERT INTO Poll
			(idUser, isPublic, anyoneCanAddOptions, image, idCategory)
			VALUES (?,?,?,?,?)');
		$stmt->execute(array(
			$_SESSION['idUser'],
			$isPublic,
			$anyoneCanAddOptions,
			$image,
			$idCategory));
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	header("Location: ../../index.php");
	exit;
?>