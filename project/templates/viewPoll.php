<?php $pollId = $_GET['id']; 
include('getPoll.php'); ?>

<div class="modal fade" id="viewPollModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Poll</h4>
			</div>

	  		<form id="questions" method="POST" action="actions.php?action=addPoll">
				<div class="modal-body">
					<div class="poll-details row vertical-align">

						<div class="col-xs-6 col-sm-3">
							<label><input type="checkbox" name="isPublic"> Private</label>
						</div>

						<div class="col-xs-6 col-sm-6">
							<label><input type="checkbox" name="anyoneCanAddOptions"> Allow anyone to add options</label>
						</div>
					</div>

					<?php foreach($poll['questions'] as $currentQuestion) ?>
					<div class="questions">
						<div class="question" align="left">
							<div class="question-text form-group-lg">
							<p><?= var_dump($currentQuestion['question']); ?></p>
								<!--<input type="text" class="form-control input_question" size="100" placeholder=$question static>-->
							</div>

							<div class="question-option form-group-sm">
								<!--<input type="text" class="form-control input_option" name="option1-1" size="100" placeholder="Add an option..."> <!--required="true"-->
							</div>
						</div>
					</div>
					<? endforeach(); ?>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary" name="submitcenas">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
