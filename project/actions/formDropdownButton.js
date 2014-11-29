$(function() {
	$(".dropdown-menu").on('click', 'li a', function() {
		$(".btn.btn-default.dropdown-toggle").text($(this).text());
		$(".btn.btn-default.dropdown-toggle").val($(this).text());

		if($(this).parent().parent().attr("id") == "genderMenu") 
			$("#gender").val($(this).text());
		else if($(this).parent().parent().attr("id") == "categoryMenu") 
			$("#category").val($(this).attr("n"));
		
	});

	$(".form-signin").on('submit', function() {
		if ($("#gender").val() === "") {
			window.alert("Select a gender.");
			return false;
		} else return true;
	});

	$("#questions").on('submit', function() {
		if ($("#category").val() === "") {
			window.alert("Select a category.");
			return false;
		} else return true;
	});
});
