<?php
	include_once("connection.php");

	try {

		$stmt = $dbh->prepare(
			'SELECT * FROM Poll
			WHERE idUser = ?
			ORDER BY idPoll DESC');
		$stmt->execute(array(
			$_SESSION['idUser']));


		$allPolls = $stmt->fetchAll();

		foreach ($allPolls as &$poll) {
			$idPoll = $poll['idPoll'];
			
			include("getPoll.php");

			$polls[] = $poll;
		}

	} catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
