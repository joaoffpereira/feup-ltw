<?php
include_once("connection.php");

try {
	$username = $_POST["inputUsername"];
	$password = $_POST["inputPassword"];

	$stmt = $dbh->prepare(
		'SELECT * FROM User
		WHERE username = ?
		AND password = ?');
	$stmt->execute(array($username, hash('sha256', $password)));
	if (!($user = $stmt->fetch())) {
		$_SESSION['responseContent'] = 'Invalid username or password.';
		header("Location: index.php?page=signIn");
		exit;
	}

	$_SESSION['idUser'] = $user['idUser'];
	$_SESSION['username'] = $username;
	$_SESSION['image'] = $user['image'];
	$_SESSION['lastLoginDate'] = $user['lastLoginDate'];
	$_SESSION['registerDate'] = $user['registerDate'];

	$stmt = $dbh->prepare(
		'UPDATE User
		SET lastLoginDate = ?
		WHERE idUser = ?');
	$stmt->execute(array(date('Y-m-d H:i:s'), $_SESSION['idUser']));
} catch (PDOException $e) {
	die($e->getMessage());
}

header("Location: index.php?page=feed");
exit;
?>
