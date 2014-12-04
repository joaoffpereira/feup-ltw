<?php
	include_once("connection.php");

	try {
		$searchName = $_POST["searchInput"];

		$stmt = $dbh->prepare(
			'SELECT * FROM Poll
			WHERE title like ? 
			AND isPrivate = 0
			ORDER BY idPoll DESC');
		$stmt->execute(array(
			"%".$searchName."%"));
	
		$polls = $stmt->fetchAll();

		foreach ($polls as &$p) {
			$getuser = $dbh->prepare(
				'SELECT username FROM User
				WHERE idUser = ?');
			$getuser->execute(array($p['idUser']));

			$user = $getuser->fetch();
			$p['author'] = $user['username'];
		}

	} catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
