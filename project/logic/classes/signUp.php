<?php
include_once("connection.php");

try {
	$username = $_POST["inputUsername"];
	$password = $_POST["inputPassword"];
	$gender = $_POST["inputGender"];

	if (!isset($username)) die('No username');
	if (!isset($password)) die('No password');
	if (!isset($gender)) die('No gender');
	if ($gender != "Female" && $gender != "Male") die('Invalid gender');

	// check if there is already a user with the requested username
	$stmt = $dbh->prepare(
		'SELECT * FROM User
		WHERE username = ?');
	$stmt->execute(array($username));
	if($stmt->fetch()) {
		$_SESSION['responseContent'] = 'That username is already taken.';
		header("Location: index.php?page=signUp");
		exit;
	}

	// inserting user into database
	$stmt = $dbh->prepare(
		'INSERT INTO User
		(username, password, lastLoginDate, registerDate, gender)
		VALUES (?, ?, ?, ?, ?)');
	$stmt->execute(array(
		$username,
		hash('sha256', $password),
		date('Y-m-d H:i:s'),
		date('Y-m-d H:i:s'),
		$gender));

	// getting user that has just sign up
	$stmt = $dbh->prepare(
		'SELECT * FROM User
		WHERE username = ?
		AND password = ?');
	$stmt->execute(array($username, hash('sha256', $password)));
	if (!($user = $stmt->fetch())) {
		$_SESSION['responseContent'] = 'Unexpected error after sign up: invalid username or password.';
		header("Location: index.php?page=signIn");
		exit;
	}

	// filling session with that user info to sign in directly after sign up submission
	$_SESSION['idUser'] = $user['idUser'];
	$_SESSION['username'] = $username;
	$_SESSION['image'] = $user['image'];
	$_SESSION['lastLoginDate'] = $user['lastLoginDate'];
	$_SESSION['registerDate'] = $user['registerDate'];
} catch(PDOException $e) {
	echo $e->getMessage();
	$_SESSION['responseContent'] = 'Could not update database, please try again later.';
	header("Location: index.php?page=signUp");
	exit;
}

header("Location: index.php?page=feed");
exit;
?>
