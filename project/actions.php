<?php
	session_start();

	switch ($_GET[action]) {
		case 'signUp':
			include 'logic/classes/signUp.php';
			break;

		case 'signIn':
			include 'logic/classes/signIn.php';
			break;

		case 'signOut':
			include 'logic/classes/signOut.php';
			break;

		case 'addPoll':
			include 'logic/classes/addPoll.php';
			break;

		case 'editUsername':
			echo 'test';
			include 'logic/classes/editUsername.php'
			break;
		
		default:
			break;
	}
?>
