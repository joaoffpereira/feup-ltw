<?php
include_once("connection.php");

try {
	$currentUsername = $_SESSION['username'];
	$newPassword = $_POST["newPassword"];
	$newPasswordConfirmation = $_POST["newPasswordConfirmation"];

	if ($newPassword !== $newPasswordConfirmation) {
		echo "
		<script type=\"text/javascript\">
			window.alert('Those passwords do not match.');
			window.location.href = 'index.php?page=profile';
		</script>";
		break;
	}

	$stmt = $dbh->prepare(
		'UPDATE User
		SET password = ?
		WHERE username = ?');
	$stmt->execute(array(
		hash('sha256', $newPassword),
		$currentUsername));

	echo "
	<script type=\"text/javascript\">
		window.alert('Password successfully edited.');
		window.location.href = 'index.php?page=profile';
	</script>";
	break;
} catch(PDOException $e) {
	echo $e->getMessage();
	echo "
	<script type=\"text/javascript\">
		window.alert('Could not update database, please try again later.');
		window.location.href = 'index.php?page=profile';
	</script>";
	break;
}

header("Location: index.php?page=profile");
exit;
?>
