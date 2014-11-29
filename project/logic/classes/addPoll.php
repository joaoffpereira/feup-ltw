<?php
	include_once("connection.php");

	try {

		var_dump($_POST['isPublic']);
		if(isset($_POST['isPublic']) && $_POST['isPublic'] == 'Yes') 
			$isPublic = 1;
		else $isPublic = 0;

		if(isset($_POST['anyoneCanAddOptions']) && $_POST['anyoneCanAddOptions'] == 'Yes') 
			$anyoneCanAddOptions = 1;
		else $anyoneCanAddOptions = 0;

		$idCategory = $_POST["inputCategory"];
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

	$idPoll = $dbh->lastInsertId();
	
	$questionN = 'question1';

	for($i=1; isset($_POST[$questionN]); $i++, $questionN = 'question'.$i) {
		$question = $_POST[$questionN];
		include("addQuestion.php");
	}

	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	/*header("Location: index.php?page=myPolls");
	exit;*/
?>
