$(document).ready(setUp);

function setUp() {
	$("#loginButton").click(changeTo);
	$("#registerButton").click(changeTo);
}

function changeTo(event) {
	$("#welcome").hide(400);

	if(event.target.id == "loginButton")
		$("#login").show(400);
	else if(event.target.id == "registerButton")
		$("#signup").fadeIn(400);
}
