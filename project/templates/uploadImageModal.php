<div class="modal fade" id="uploadImageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">
					<i class="glyphicon glyphicon-cloud-upload"></i>
					<span>Upload image</span>
				</h4>
			</div>

			<div class="modal-body">
				<div id="progress" class="progress">
					<div class="progress-bar progress-bar-info progress-bar-striped"></div>
				</div>

				<div class="container-fluid">
					<div class="row">
						<span class="btn btn-success fileinput-button col-xs-12 col-sm-3">
							<i class="glyphicon glyphicon-plus"></i>
							<span>Select files</span>
							<!-- The file input field used as target for the file upload widget -->
							<input id="fileupload" type="file" name="files[]">
						</span>

						<div id="files" class="files col-xs-12 col-sm-9"></div>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button onclick="setUserProfilePic()" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
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
</script>
