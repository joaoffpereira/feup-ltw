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
					<?php $reverseMyPolls = array_reverse($polls); ?>
					<?php foreach ($reverseMyPolls as $currentPoll) { ?>
					<div class="col-xs-12 col-sm-3 placeholder">
						<!--<img src="assets/img/default-poll.png" class="img-responsive" alt="Generic placeholder thumbnail" data-toggle="modal" data-target="#viewPollModal">-->
						<a href=<?= "index.php?page=viewPoll&id=".$currentPoll['idPoll']."&previous=Feed"; ?> id="modal-view" class="btn btn-lg">
							<img src="assets/img/default-poll.png" class="img-responsive" alt="Generic placeholder thumbnail">
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
