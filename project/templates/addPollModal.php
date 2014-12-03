<div class="modal fade" id="addPollModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Add new poll</h4>
			</div>

			<form id="questions" method="POST" action="actions.php?action=addPoll" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="poll-details row">
						<div class="question-text form-group-lg col-xs-12 col-sm-12">
							<input type="text" class="form-control input_question" name="title" size="100" placeholder="Title" required autofocus>
						</div>

						<input type="hidden" id="category" name="inputCategory" value="">
						<div class="add-poll-modal-dropdown col-xs-6 col-sm-3 btn-group">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								Category <span class="caret"></span>
							</button>
							<ul id="categoryMenu" class="dropdown-menu" role="menu">
								<li><a href="#" n="1">Culture</a></li>
								<li><a href="#" n="2">Sports</a></li>
								<li><a href="#" n="3">Technology</a></li>
								<li><a href="#" n="4">Media</a></li>
								<li class="divider"></li>
								<li><a href="#" n="5">Other</a></li>
							</ul>
						</div>

						<div class="add-poll-modal-checkbox col-xs-6 col-sm-3">
							<label><input type="checkbox" id="isPrivate" name="isPrivate" value="Yes"> Private</label>
						</div>

						<div id="poll-pic-selection" class="col-xs-12 col-md-12">
							<input type="file" name="poll-pic" class="filestyle" data-buttonBefore="true" data-buttonText="Add an image to this poll">
						</div>
					</div>

					<div class="questions">
						<div class="question" align="left">
							<div class="question-text form-group-lg">
								<input type="text" class="form-control input_question" number="1" name="question1" size="100" placeholder="Ask something..." required>
							</div>

							<div class="question-option form-group-sm">
								<input type="text" number="1" class="form-control input_option" name="option1-1" size="100" placeholder="Add an option..." required>
							</div>
						</div>
					</div>

					<div>
						<button id="new_question" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add question</button>
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
