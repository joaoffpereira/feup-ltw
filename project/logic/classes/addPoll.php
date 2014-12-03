<?php
include_once("connection.php");

try {
	$isPrivate = $_POST['isPrivate'] != '' | 0;

	$idCategory = $_POST["inputCategory"];

	if ($_FILES["poll-pic"]["name"] != '') {
		$image = uniqid() . "-" . $_FILES["poll-pic"]["name"];
		move_uploaded_file($_FILES["poll-pic"]["tmp_name"], UPLOADS_PATH . "/$image");
	} else $image = '';

	$title = $_POST["title"];

	$stmt = $dbh->prepare(
		'INSERT INTO Poll
		(idUser, isPrivate, title, image, idCategory)
		VALUES (?, ?, ?, ?, ?)');
	$stmt->execute(array(
		$_SESSION['idUser'],
		$isPrivate,
		$title,
		$image,
		$idCategory));

	$stmt = $dbh->prepare(
		'SELECT MAX(idPoll) AS lastId FROM Poll');
	
	$stmt->execute();
	$idPoll = $stmt->fetch()['lastId'];


	$questionN = 'question1';

	for($i=1; isset($_POST[$questionN]); $i++, $questionN = 'question'.$i) {
		$question = $_POST[$questionN];
		if($question !== "")
			include("addQuestion.php");
		echo "Entrei";
	}

} catch(PDOException $e) {
	echo $e->getMessage();
}

header("Location: index.php?page=myPolls");
exit;
?>
