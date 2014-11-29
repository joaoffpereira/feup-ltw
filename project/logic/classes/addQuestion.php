<?php
	include_once("connection.php");

	try {
		$image = $_POST["image"];

		$stmt = $dbh->prepare(
			'INSERT INTO Question
			(idPoll, question, image)
			VALUES (?,?,?)');
		$stmt->execute(array(
			$idPoll,
			$question,
			$image));
	
	
	$idQuestion = $dbh->lastInsertId();

	$optionN = 'option'.$i.'-1';

	for($j=1; isset($_POST[$optionN]); $j++, $optionN = 'option'.$i.'-'.$j) {
		$option = $_POST[$optionN];

		if($option !== "")
			include("addOption.php");
	}

	} catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
