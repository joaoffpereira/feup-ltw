	<!-- Custom styles for this template -->
	<link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
	<?php include 'navbar.php'; ?>
	
	<a href="actions.php?action=myPolls">get it</a>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 main">
				<div class="my-polls-header page-header row">
					<h1 class="my-polls-header-title pull-left">My polls</h1>

					<!-- Button trigger modal -->
					<div class="pull-right">
						<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#addPollModal">
							<span class="glyphicon glyphicon-plus"></span> Add new poll
						</button>
					</div>

					<!-- Modal -->
					<?php include 'addPollModal.php'; ?>
				</div>

				<div class="row placeholders">
					<div class="col-xs-12 col-sm-3 placeholder">
						<img src="assets/img/default-poll.png" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>What is the best band of all time?</h4>
						<span class="text-muted">by Henrique Ferrolho</span>
					</div>
					<div class="col-xs-12 col-sm-3 placeholder">
						<img src="assets/img/default-poll.png" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>Who is the last character to die in Game of Thrones?</h4>
						<span class="text-muted">by Henrique Ferrolho</span>
					</div>
				</div>
			</div>
		</div>
	</div>
