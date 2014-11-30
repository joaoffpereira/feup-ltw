<?php 
	include 'logic/classes/getPoll.php'; 
?>

<div class="modal fade" id="viewPollModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h3 class="modal-title" id="myModalLabel"> <?= $poll['title']; ?> </h3>
			</div>

			<form id="answerPoll" method="POST" action="actions.php?action=answerPoll">
				<div class="modal-body">
					<?php foreach($poll['questions'] as $currentQuestion) { ?>
					<div class="questions">
						<div class="question" align="left">
							<div class="question-text form-group-lg">
								<label><?=$currentQuestion['question'];?></label>
							</div>
							<div class="question-option form-group-sm">
								<?php foreach($currentQuestion['options'] as $currentOption) { ?>
								<div class="radio">
		  							<label><input type="radio" name="optradio"><?= $currentQuestion['question']; ?></label>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary" name="submitcenas">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>