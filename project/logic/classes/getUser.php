<?php
include_once("connection.php");

$polls = array();

try {
	$stmt = $dbh->prepare(
		'SELECT * FROM User
		WHERE idUser = ?');
	$stmt->execute(array($idUser));

	$otherUser = $stmt->fetch();

	$stmt = $dbh->prepare(
		'SELECT * FROM Poll
		WHERE idUser = ? AND isPrivate = 0
		ORDER BY idPoll DESC');
	$stmt->execute(array($idUser));

	$allPolls = $stmt->fetchAll();

	foreach ($allPolls as &$poll) {
		$idPoll = $poll['idPoll'];

		include("getPoll.php");

		array_push($polls, $poll);
	}

	$otherUser['polls'] = $polls;

} catch(PDOException $e) {
	echo $e->getMessage();
}
?>