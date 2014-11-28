
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">New Poll</h4>
			</div>


  		<form id="questions" action="actions.php?action=addPoll">
			<div class="modal-body">
    				<div class="question" align="left">
      					<h4>Put here your question.
        				<div class="form-group-lg">
           					<input type="text" class="form-control input_question" number="1" name="question1" size="100" placeholder="Question 1" autofocus> <!--required missing-->
        				</div>
      					</h4>

      					<h5>Options:
        				<div class="form-group-sm">
              			<input type="text" number="1" class="form-control input_option" name="option1-1" size="100" placeholder="Option 1"> <!--required="true"-->
        				</div>
      					</h5>
    				</div>
			</div>
  			<div>
      			<button id="new_question" class="btn btn-primary">Add question <span class="glyphicon glyphicon-plus"></span></button>
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
