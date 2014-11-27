$(function() {
	$(".dropdown-menu").on('click', 'li a', function() {
		$(".btn:first-child").text($(this).text());
		$(".btn:first-child").val($(this).text());

		$("#gender").val($(this).text());
		//console.log($(this).text());
	});

	$(".form-signin").on('submit', function() {
		if ($("#gender").val() === "") {
			window.alert("Select a gender.");
			return false;
		} else return true;
	});
});
