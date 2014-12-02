	<!-- Custom styles for this template -->
	<link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
	<?php include 'navbar.php'; ?>
	<?php include 'logic/classes/getFeedPolls.php'; ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 main">
				<h1 class="page-header">Feed</h1>

				<div class="row placeholders">
					<?php foreach ($polls as $currentPoll) { ?>
					<div class="col-xs-12 col-sm-3 placeholder">
						<a href=<?= "index.php?page=viewPoll&id=".$currentPoll['idPoll']."&previous=Feed"; ?> id="modal-view">
							<img href=<?= "index.php?page=viewPoll&id=".$currentPoll['idPoll']."&previous=Feed"; ?> id="modal-view" src="<?= $currentPoll['image'] != '' ? UPLOADS_URL . "/" . $currentPoll['image'] : 'assets/img/default-poll.png' ?>" class="img-responsive" alt="Generic placeholder thumbnail">
						</a>
						
						<h4><?= $currentPoll['title']; ?></h4>
						<span class="text-muted">
							<?= "by ".$currentPoll['author']; ?>
						</span>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
