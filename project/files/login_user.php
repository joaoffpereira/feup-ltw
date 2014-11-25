<?php

include_once("connection.php");

if (!isset($_POST["username"])) die('No username');
if (!isset($_POST["password"])) die('No password');

try {
  $stmt = $dbh->prepare('SELECT * FROM User WHERE username = ?, password = ?');
  $stmt->execute(array($_POST["username"],hash('sha256',$_POST["password"]));
    $user = $stmt->fetch();
    if ($user === false) die("Invalid username or password");
  } catch (PDOException $e) {
    die($e->getMessage());
  }
  ?>