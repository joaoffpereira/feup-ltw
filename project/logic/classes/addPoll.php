<?php
	include_once("connection.php");

	try {

		(isset($_POST['isPrivate']) && $_POST['isPrivate'] === 'No') ? $isPrivate = 1 : $isPrivate = 0;

		(isset($_POST['anyoneCanAddOptions']) && $_POST['anyoneCanAddOptions'] === 'No') 
			? $anyoneCanAddOptions = 1 : $anyoneCanAddOptions = 0;


		$idCategory = $_POST["inputCategory"];
		/*$image = $_POST["image"]; */
		$title = $_POST["title"];
		
		$stmt = $dbh->prepare(
			'INSERT INTO Poll
			(idUser, isPrivate, anyoneCanAddOptions, title, image, idCategory)
			VALUES (?,?,?,?,?,?)');
		$stmt->execute(array(
			$_SESSION['idUser'],
			$isPrivate,
			$anyoneCanAddOptions,
			$title,
			$image,
			$idCategory));

		$idPoll = $dbh->lastInsertId();
		
		$questionN = 'question1';

		for($i=1; isset($_POST[$questionN]); $i++, $questionN = 'question'.$i) {
			$question = $_POST[$questionN];
			include("addQuestion.php");
		}

	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	header("Location: index.php?page=myPolls");
	exit;
?>
