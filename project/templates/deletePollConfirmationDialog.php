<div id="deletePollConfirmationModal" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Delete poll</h4>
			</div>

			<form method="POST" action=<?="actions.php?action=deletePoll&id=" . $currentPoll['idPoll']?> enctype="multipart/form-data">
				<div class="modal-body">
					<p>Are you sure you want to delete this?</p>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Delete poll</button>
				</div>
			</form>
		</div>
	</div>
</div>
