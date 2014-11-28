	<!-- Custom styles for this template -->
	<link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
	<?php include 'navbar.php'; ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 main">
				<h1 class="page-header">My polls</h1>

				<div id="addNewPollButton">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  						+ Add New Poll
					</button>

					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					        <h4 class="modal-title" id="myModalLabel">New Poll</h4>
					      </div>
					      <div class="modal-body">
					        <!-- addpoll page here CHANGE THIS --> <!-- if closed (out of focus, revert html) -->
					        <?php include 'assets/addPoll.php'; ?>
					      </div>

					      <div class="modal-footer">
							<label><input type="checkbox" name="isPublic"> Public</label>
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary">Save changes</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>

				<div> </div>

				<div class="row placeholders">
					<div class="col-xs-6 col-sm-3 placeholder">
						<img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>What is the best band of all time?</h4>
						<span class="text-muted">by Henrique Ferrolho</span>
					</div>
					<div class="col-xs-6 col-sm-3 placeholder">
						<img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>Who is the last character to die in Game of Thrones?</h4>
						<span class="text-muted">by Henrique Ferrolho</span>
					</div>
				</div>
			</div>
		</div>
	</div>
