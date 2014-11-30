<?php $pollId = $_GET['id']; 
include 'logic/classes/getPoll.php'; ?>

<div class="modal fade" id="viewPollModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h3 class="modal-title" id="myModalLabel"> <?= $poll['title']; ?> </h3>
			</div>

			<div class="modal-body">
				<?php foreach($poll['questions'] as $currentQuestion) { ?>
				<div class="questions">
					<div class="question" align="left">
						<div class="question-text form-group-lg">
						<p><?= var_dump($currentQuestion['question']); ?></p>
						</div>
							<div class="question-option form-group-sm">
						</div>
					</div>
				</div>
				<?php } ?>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary" name="submitcenas">Save changes</button>
			</div>
		</div>
	</div>
</div>