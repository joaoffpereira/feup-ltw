<?php
//var_dump($_POST);
include_once("connection.php");

$user = $_POST['username'];
$pass = $_POST['password'];

try {
	$stmt = $dbh->prepare("INSERT INTO User (username, registerDate, lastLoginDate, password) VALUES (?,?,?,?)");
	//echo $user;
	//echo $pass;
	$stmt->execute(array($user, date('Y-m-d'),date('Y-m-d'),hash('sha256',$pass)));
}
catch(PDOException $e) {
	echo $e->getMessage();
}

header("Location: Projeto.html");
exit;
?>