$('#privacyChanged').on('click', function () {
	
	var newPrivacy;
	var oldPrivacy = $(this).val();
	var idPollP = $(this).attr("idPoll");

	if(oldPrivacy === "private") {
		newPrivacy = "nP=0";
		$(this).val("public");
	}
	else {
		newPrivacy = "nP=1";
		$(this).val("private");
	}

	var data = "" + newPrivacy + "&idPoll=" + idPollP;

 $.ajax({
        url: 'logic/classes/updatePrivacy.php',
		data: data,
		type: "post",
		datatype: "json",
        success: function(data, status) {
        	var res = $.parseJSON(data);
        	if(res.result == '0')
				alert("Unable to change privacy, try again later.");
        },
		error: function(jqXHR, textstatus, errorthrown) {
			alert(jqXHR + ": " + textstatus + ": " + errorthrown);
		}
    });
});
