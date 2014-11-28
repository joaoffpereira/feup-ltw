<?php
	include_once("connection.php");

	try {
		/* TODO !!*/
		$isPublic = $_POST["isPublic"];
		$anyoneCanAddOptions = $_POST["anyoneCanAddOptions"]; 
		$idCategory = $_POST["idCategory"];
		/*$image = $_POST["image"]; */

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
	
	$idPoll = db2_last_insert_id($dbh);
	
	for($i=1; isset($_POST['question'.$i]); $i++) {
		$question = $_POST['question'.$i];
		include("addQuestion.php");
	}

	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	header("Location: ../../index.php");
	exit;
?>