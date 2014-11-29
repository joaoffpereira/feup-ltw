<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Add new poll</h4>
			</div>

	  		<form id="questions" action="actions.php?action=addPoll">
				<div class="modal-body">
					<div class="questions">
	    				<div class="question" align="left">
	        				<div class="question-text form-group-lg">
	           					<input type="text" class="form-control input_question" number="1" name="question1" size="100" placeholder="Ask something..." autofocus> <!--required missing-->
	        				</div>

	        				<div class="question-option form-group-sm">
	              				<input type="text" number="1" class="form-control input_option" name="option1-1" size="100" placeholder="Add an option..."> <!--required="true"-->
	        				</div>
	    				</div>
    				</div>

		  			<div>
		      			<button id="new_question" class="btn btn-primary">Add question <span class="glyphicon glyphicon-plus"></span></button>
		  			</div>
				</div>

				<div class="modal-footer">
					<label><input type="checkbox" name="isPublic"> Public </label>
					<label><input type="checkbox" name="anyoneCanAddOptions"> Users can add options </label>
					<input type="hidden" id="category" name="inputCategory" value="">
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							Category <span class="caret"></span>
						</button>
						<ul id="categoryMenu" class="dropdown-menu" role="menu">
							<li><a href="#">Culture</a></li>
							<li><a href="#">Sports</a></li>
							<li><a href="#">Technology</a></li>
							<li><a href="#">Media</a></li>
							<li class="divider"></li>
							<li><a href="#">Other</a></li>
						</ul>
					</div>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button formaction="actions.php?action=addPoll" type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
