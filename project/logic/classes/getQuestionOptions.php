<?php
include_once("connection.php");

try {

	$stmt = $dbh->prepare(
		'SELECT * FROM Option
		WHERE idQuestion = ?');
	$stmt->execute(array($idQuestion));

	$options = $stmt->fetchAll();

} catch(PDOException $e) {
	echo $e->getMessage();
}
?>
