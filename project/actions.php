<?php
	session_start();

	switch ($_GET[action]) {
		case 'signIn':
			include 'logic/classes/signIn.php';
			break;

		case 'signUp':
			include 'logic/classes/signUp.php';
			break;

		case 'signOut':
			include 'logic/classes/signOut.php';
			break;
		
		default:
			break;
	}
?>
