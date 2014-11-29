<?php
	echo 'Editing username...';

	include_once("connection.php");

	try {
		$currentUsername = $_SESSION['username'];
		$newUsername = $_POST["newUsername"];

		if (!isset($newUsername)) die('New username was not specified');

		$stmt = $dbh->prepare('SELECT * FROM User WHERE username = ?');
		$stmt->execute(array($currentUsername));
		$stmt->fetch();

		$stmt = $dbh->prepare(
			'UPDATE User
			SET username = ?
			WHERE username = ?');
		$stmt->execute(array(
			$newUsername,
			$currentUsername)); 
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	header("Location: index.php");
	exit;
?>
