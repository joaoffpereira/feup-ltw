<?php
include_once("../../config.php");
include_once("connection.php");

try {
	$newPrivacy = $_POST['nP'];
	$idPoll = $_POST['idPoll'];

	$stmt = $dbh->prepare(
		'UPDATE Poll
		SET isPrivate = ?
		WHERE idPoll = ?');

	$stmt->execute(array(
		$newPrivacy,
		$idPoll));

} catch(PDOException $e) {
	echo $e->getMessage();

	echo json_encode(array('result' => 0));
}

echo json_encode(array('result' => 1));
?>
