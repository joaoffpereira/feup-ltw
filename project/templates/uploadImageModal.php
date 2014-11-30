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

			<form class="form-edit-username" role="form" action="actions.php?action=editUsername" method="POST">
				<div class="modal-body">
					<div id="progress" class="progress">
						<div class="progress-bar progress-bar-success"></div>
					</div>

					<div class="container-fluid">
						<div class="row">
							<span class="btn btn-success fileinput-button col-xs-12 col-sm-3">
								<i class="glyphicon glyphicon-plus"></i>
								<span>Select files</span>
								<!-- The file input field used as target for the file upload widget -->
								<input id="fileupload" type="file" name="files[]" multiple="">
							</span>

							<div id="files" class="files col-xs-12 col-sm-9"></div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
