<?php
require_once realpath(dirname(__FILE__) . "/../../config.php");

include_once("connection.php");

try {
	$currentUsername = $_SESSION['username'];

	$picToUpload = $_POST["picToUpload"];
	$parsedPicToUpload = uniqid() . "-" . $picToUpload;

	rename(UPLOADS_PATH . "/$picToUpload", UPLOADS_PATH . "/$parsedPicToUpload");

	$stmt = $dbh->prepare(
		'UPDATE User
		SET image = ?
		WHERE username = ?');
	$stmt->execute(array(
		$parsedPicToUpload,
		$currentUsername));

	$_SESSION['image'] = $parsedPicToUpload;
	session_write_close();

	echo json_encode(array('result' => 1));
} catch(PDOException $e) {
	echo json_encode(array('result' => 0, 'message' => $e->getMessage()));
}
?>
