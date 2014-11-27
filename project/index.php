<?php
	include 'templates/header.php';

	switch ($_GET['page']) {
		case 'signUp':
			include 'templates/signUp.php';
			break;

		case 'profile':
			if ($_SESSION['username'] != null)
				include 'templates/profile.php';
			else {
				var_dump("You are not signed in.");
				include 'templates/signIn.php';
			}
			break;
		
		case 'signOut':
			if ($_SESSION['username'] != null)
				include 'logic/classes/signOut.php';
			else {
				var_dump("You are not signed in.");
				include 'templates/signIn.php';
			}
			break;

		default:
			include 'templates/signIn.php';
			break;
	}

	include 'templates/footer.php';
?>
