<?php
include_once("connection.php");

try {
	$currentUsername = $_SESSION['username'];
	$newUsername = $_POST["newUsername"];

	if ($newUsername === "") {
		echo "
		<script type=\"text/javascript\">
			window.alert('A new username was not specified.');
			window.location.href = 'index.php?page=profile';
		</script>";
		break;
	}

	$stmt = $dbh->prepare(
		'SELECT * FROM User
		WHERE username = ?');
	$stmt->execute(array($newUsername));
	if ($stmt->fetch()) {
		echo "
		<script type=\"text/javascript\">
			window.alert('That username is already taken.');
			window.location.href = 'index.php?page=profile';
		</script>";
		break;
	}

	$stmt = $dbh->prepare(
		'UPDATE User
		SET username = ?
		WHERE username = ?');
	$stmt->execute(array(
		$newUsername,
		$currentUsername));

	$_SESSION['username'] = $newUsername;

	echo "
	<script type=\"text/javascript\">
		window.alert('Username successfully edited.');
		window.location.href = 'index.php?page=profile';
	</script>";
	break;
} catch(PDOException $e) {
	echo $e->getMessage();
}

header("Location: index.php?page=profile");
exit;
?>
