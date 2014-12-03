<?php
	include_once("connection.php");
	$selectedOpt = array();

	try {
		include("getPoll.php");

		$counterx = 0;
		foreach ($poll['questions'] as $qt)
			foreach ($qt['options'] as $opt) {

				$stmt = $dbh->prepare(
				'SELECT * FROM UserOption
				WHERE idUser = ? 
				AND idOption = ?');
			
				$stmt->execute(array(
				$_SESSION['idUser'],
				$opt['idOption']));

				$answered = $stmt->fetch();

				if($answered) {
					$counterx++;
					array_push($selectedOpt, $opt['idOption']);
					break;
				}
			}

		$answered = ($counterx > 0); 

	} catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
