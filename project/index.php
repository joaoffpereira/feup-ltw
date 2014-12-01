<?php
include 'templates/header.php';

$currentPage = $_GET['page'];

$pagesWithMandatoryLogin = array('feed', 'myPolls', 'profile', 'signOut');

// if the current page is one of the pages with mandatory login
foreach ($pagesWithMandatoryLogin as $page) {
	// and user is not logged in
	if ($currentPage === $page && $_SESSION['username'] === null) {
		echo "
		<script type=\"text/javascript\">
			window.alert('You are not signed in.');
			window.location.href = 'index.php';
		</script>
		";

		// redirect to sign in page
		$currentPage = 'signIn';
		break;
	}
}

switch ($currentPage) {
	case 'signUp':
	include 'templates/signUp.php';
	break;

	case 'feed':
	include 'templates/feed.php';
	break;

	case 'myPolls':
	include 'templates/myPolls.php';
	break;

	case 'profile':
	include 'templates/profile.php';
	break;

	case 'signOut':
	include 'logic/classes/signOut.php';
	break;

	case 'viewPoll':
	include 'templates/viewPoll.php';
	break;

	case 'search':
	include 'templates/searchResults.php';
	break;
	
	default:
	include 'templates/signIn.php';
	break;
}

include 'templates/footer.php';
?>
