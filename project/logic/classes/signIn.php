<?php
include_once("connection.php");

$username = $_POST["inputUsername"];
$password = $_POST["inputPassword"];

if (!isset($username)) die('No username');
if (!isset($password)) die('No password');

try {
	$stmt = $dbh->prepare(
		'SELECT * FROM User
		WHERE username = ?
		AND password = ?');
	$stmt->execute(array($username, hash('sha256', $password)));
	if (!($user = $stmt->fetch())) {
		echo "
		<script type=\"text/javascript\">
			window.alert('Invalid username or password.');
			window.location.href = 'index.php';
		</script>";
		break;
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
