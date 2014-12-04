<?php
include_once("connection.php");
$selectedOpt = array();

try {
	include("getPoll.php");

	$counterx = 0;
	foreach ($poll['questions'] as &$qt) {
		foreach ($qt['options'] as &$opt) {

			$stmt = $dbh->prepare(
				'SELECT * FROM UserOption
				WHERE idUser = ? 
				AND idOption = ?');
			
			$stmt->execute(array(
				$_SESSION['idUser'],
				$opt['idOption']));

			$answered = $stmt->fetch();

			$stmt = $dbh->prepare('SELECT COUNT(*) as counterResult FROM UserOption WHERE idOption = ?');
			$stmt->execute(array($opt['idOption']));
			$counterOpt = $stmt->fetch()['counterResult'];
			$opt['counterResult'] = ($counterOpt > 0) ? $counterOpt : 0;

			if($answered) {
				$counterx++;
				array_push($selectedOpt, $opt['idOption']);
			}
		}
	}

	$answered = ($counterx > 0); 

} catch(PDOException $e) {
	echo $e->getMessage();
}
?>
