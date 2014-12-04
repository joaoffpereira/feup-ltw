<?php
include_once("connection.php");

try {
	$stmt = $dbh->prepare(
		'SELECT * FROM Poll
		WHERE idPoll = ?');
	$stmt->execute(array($idPoll));

	$poll = $stmt->fetch();

	$stmt = $dbh->prepare(
		'SELECT category FROM Category
		WHERE idCategory = ?');
	$stmt->execute(array($poll['idCategory']));

	$poll['category'] = $stmt->fetch()['category'];

	$getuser = $dbh->prepare(
		'SELECT username FROM User
		WHERE idUser = ?');
	$getuser->execute(array($poll['idUser']));

	$user = $getuser->fetch();

	include("getPollQuestions.php");

	$poll['questions'] = $questions;
	$poll['author'] = $user['username'];

} catch(PDOException $e) {
	echo $e->getMessage();
}
?>
