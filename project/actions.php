<?php
require_once 'config.php';

$action = $_GET['action'] != '' ? $_GET['action'] : '';

switch ($action) {
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

	case 'editProfilePic':
	include 'logic/classes/editProfilePic.php';
	break;

	case 'editUsername':
	include 'logic/classes/editUsername.php';
	break;

	case 'editPassword':
	include 'logic/classes/editPassword.php';
	break;

	case 'myPolls': 
	include 'logic/classes/getMyPolls.php';
	break;

	case 'answerPoll':
	include 'logic/classes/answerPoll.php';
	break;
	
	case 'deletePoll':
	include 'logic/classes/deletePoll.php';
	break;

	default:
	break;
}
?>
