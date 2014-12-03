$('#viewPollModal').on('hide.bs.modal', function () {
	var newLocation;

	if(document.getElementById('modalPreviousPage').innerHTML == " Feed")
		newLocation = "feed";
	else newLocation = "myPolls";

  	window.location = 'index.php?page='.concat(newLocation);
});

function redirect(idPoll) {
	if(document.getElementById('modalPreviousPage').innerHTML == " Feed")
		newLocation = "feed";
	else newLocation = "myPolls";

	window.location = 'index.php?page=viewPoll&id='.concat(idPoll).concat("&previous=").concat(newLocation);
}
