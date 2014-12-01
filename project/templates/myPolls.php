	<!-- Custom styles for this template -->
	<link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
	<?php include 'navbar.php'; ?>
	<?php include 'logic/classes/getMyPolls.php';?>
	
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
					<?php $reverseMyPolls = array_reverse($polls); ?>
					<?php foreach ($reverseMyPolls as $currentPoll) { ?>
					<div class="col-xs-12 col-sm-3 placeholder">
						<?php include 'templates/viewPoll.php' ?>
						<img id="modal-view" src="assets/img/default-poll.png" class="img-responsive" alt="Generic placeholder thumbnail" data-book-id="modalID" data-toggle="modal" data-target="#viewPollModal">
						
						<h4><?= $currentPoll['title']; ?></h4>
						<span class="text-muted">
							<?= "by ".$currentPoll['author']; ?>
						</span>
					</div>
					<?php include 'templates/viewPoll.php'; ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
