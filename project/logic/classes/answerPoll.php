<?php
include_once("connection.php");

try {
	$idPoll = $_GET['id'];
	
	for($j=0; isset($_POST[$j]); $j++) {
		$res = explode("-", $_POST[$j]);

		$idQuestion = intval($res[0]);

		$idOption = intval($res[1]);

		$stmt = $dbh->prepare(
			'DELETE FROM UserOption
			WHERE idUser = ? 
			AND idQuestion = ?');
		$stmt->execute(array(
			$_SESSION["idUser"],
			$idQuestion));

		$stmt = $dbh->prepare(
			'INSERT INTO UserOption
			(idUser, idOption, idQuestion)
			VALUES (?,?,?)');
		$stmt->execute(array(
			$_SESSION["idUser"],
			$idOption,
			$idQuestion));
	}
} catch(PDOException $e) {
	echo $e->getMessage();
}

header("Location: index.php?page=viewPollResults&id=".$idPoll);
?>
