<?php
include_once("connection.php");

$polls = array();

try {
	$stmt = $dbh->prepare(
		'SELECT * FROM Poll
		WHERE isPrivate = 0
		ORDER BY idPoll DESC');
	$stmt->execute();

	$allPolls = $stmt->fetchAll();

	foreach ($allPolls as &$poll) {
		$idPoll = $poll['idPoll'];

		include("getPoll.php");

		array_push($polls, $poll);
	}
} catch(PDOException $e) {
	echo $e->getMessage();
}
?>
