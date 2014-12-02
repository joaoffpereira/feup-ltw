<?php
include_once("connection.php");

try {
	$stmt = $dbh->prepare(
		'SELECT * FROM Poll
		WHERE idPoll = ?');
	$stmt->execute(array($idPoll));
	$pollToBeDeleted = $stmt->fetch();
	if ($pollToBeDeleted['image'] != '') {
		$imageName = $pollToBeDeleted['image'];
		unlink(UPLOADS_PATH . "/$imageName");
	}

	$stmt = $dbh->prepare(
		'DELETE FROM Poll
		WHERE idPoll = ?');
	$stmt->execute(array($idPoll));

	$stmt = $dbh->prepare(
		'SELECT * FROM Question
		WHERE idPoll = ?');
	$stmt->execute(array($idPoll));

	$questionsToDelete =  $stmt->fetchAll();

	foreach ($questionsToDelete as $questionToDelete) {
		$idQuestion = $questionToDelete['idQuestion'];

		$stmt = $dbh->prepare(
			'SELECT * FROM Option
			WHERE idQuestion = ?');
		$stmt->execute(array($idQuestion));

		$optionsToDelete = $stmt->fetchAll();

		foreach ($optionsToDelete as $optionToDelete) {
			$idOption = $optionToDelete['idOption'];

			$stmt = $dbh->prepare(
				'DELETE FROM Option
				WHERE idOption = ?');
			$stmt->execute(array($idOption));

			$stmt = $dbh->prepare(
				'DELETE FROM UserOption
				WHERE idOption = ?');
			$stmt->execute(array($idOption));
		}

		$stmt = $dbh->prepare(
			'DELETE FROM Question
			WHERE idQuestion = ?');
		$stmt->execute(array($idQuestion));
	}
} catch(PDOException $e) {
	echo $e->getMessage();
}

header("Location: index.php?page=myPolls");
exit;
?>
