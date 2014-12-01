function setUserProfilePic() {
	var data = "picToUpload=" + $('#files p').text();

	$.ajax({
		url: 'logic/classes/editProfilePic.php',
		data: data,
		type: "post",
		datatype: "json",
		success: function(data, textstatus) {
			//alert(data.result + ": " + textstatus);
			alert('Profile picture successfully edited.');
			window.location.href = 'index.php?page=profile';
		},
		error: function(jqXHR, textstatus, errorthrown) {
			alert(jqXHR + ": " + textstatus + ": " + errorthrown);
		}
	});
}
