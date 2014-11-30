<?php
	include_once("connection.php");

	try {

		$stmt = $dbh->prepare(
			'SELECT * FROM Poll
			WHERE isPrivate = 0');
		$stmt->execute();

		$allPolls = $stmt->fetchAll();

		foreach ($allPolls as &$poll) {
			$idPoll = $poll['idPoll'];
			
			include("getPoll.php");

			$polls[] = $poll;
		}

		$reversePolls = array_reverse($polls);

	} catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
