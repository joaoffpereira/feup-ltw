<?php
include_once("connection.php");

try {
	$currentUsername = $_SESSION['username'];
	$newUsername = $_POST["newUsername"];

	if ($newUsername === "")
		$_SESSION['responseContent'] = 'A new username was not specified.';

	$stmt = $dbh->prepare(
		'SELECT * FROM User
		WHERE username = ?');
	$stmt->execute(array($newUsername));
	if ($stmt->fetch())
		$_SESSION['responseContent'] = 'That username is already taken.';

	$stmt = $dbh->prepare(
		'UPDATE User
		SET username = ?
		WHERE username = ?');
	$stmt->execute(array(
		$newUsername,
		$currentUsername));

	$_SESSION['username'] = $newUsername;

	$_SESSION['responseContent'] = 'Username successfully edited.';
} catch(PDOException $e) {
	echo $e->getMessage();
	$_SESSION['responseContent'] = 'Could not update database, please try again later.';
}

header("Location: index.php?page=profile");
exit;
?>
