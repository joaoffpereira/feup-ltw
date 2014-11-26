<?php
include_once("connection.php");

echo phpversion();

try {
	$user = $_POST["username"];
	$pass = $_POST["password"];
	//$options = ['cost' => 12];

	$stmt = $dbh->prepare('INSERT INTO User (username, registerDate, lastLoginDate, password) VALUES (?,?,?,?)');
	$stmt->execute(array(
		$user,
		date('Y-m-d'),
		date('Y-m-d'),
		hash('sha256',$pass)));
		//password_hash($pass, PASSWORD_DEFAULT, $options)));

}
catch(PDOException $e) {
	echo $e->getMessage();
}

header("Location: ../../index.php");
exit;
?>
