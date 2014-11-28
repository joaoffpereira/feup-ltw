<?php
	include 'templates/header.php';

	switch ($_GET['page']) {
		case 'signUp':
			include 'templates/signUp.php';
			break;

		case 'feed':
			if ($_SESSION['username'] != null)
				include 'templates/feed.php';
			else {
				echo "<script type=\"text/javascript\">
				window.alert('You are not signed in.');
				window.location.href = 'index.php';</script>"; 
			}
			break;
		
		case 'myPolls':
			if ($_SESSION['username'] != null)
				include 'templates/myPolls.php';
			else {
				echo "<script type=\"text/javascript\">
				window.alert('You are not signed in.');
				window.location.href = 'index.php';</script>"; 
			}
			break;
		
		case 'profile':
			if ($_SESSION['username'] != null)
				include 'templates/profile.php';
			else {
				echo "<script type=\"text/javascript\">
				window.alert('You are not signed in.');
				window.location.href = 'index.php';</script>"; 
			}
			break;
		
		case 'signOut':
			if ($_SESSION['username'] != null)
				include 'logic/classes/signOut.php';
			else {
				echo "<script type=\"text/javascript\">
				window.alert('You are not signed in.');
				window.location.href = 'index.php';</script>"; 
			}
			break;

		default:
			include 'templates/signIn.php';
			break;
	}

	include 'templates/footer.php';
?>
