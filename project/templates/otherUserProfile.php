	<!-- Custom styles for this template -->
	<link href="assets/css/profile.css" rel="stylesheet">
	<link href="assets/css/dashboard.css" rel="stylesheet">
	
</head>
<body>
	<?php include 'navbar.php'; ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 main">
				<h1 class="page-header"><?=$otherUser['username'] . "'s profile"?></h1>

				<div class="row">
					<div class="col-xs-12 col-sm-offset-3 col-sm-3 profile-pic">
						<img id="currentImage" src="<?= isset($otherUser['image']) ? UPLOADS_URL . "/" . $otherUser['image'] : 'assets/img/blank-profile.png' ?>" class="img-responsive" alt="Blank profile picture"  data-toggle="modal" data-target="#uploadImageModal">
					</div>
					<div class="col-xs-12 col-sm-5">
						<!--last login date and register date -->
						<div class="userLastLoginAndRegister">
							<h5><b>Last login: </b><?= $otherUser['lastLoginDate'];?></h5>
							<h5><b>Register date: </b><?=$otherUser['registerDate'];?></h5>
						</div>
					</div>
				</div>

				<div>
					<h3 class="userPolls"> <?=$otherUser['username'] . "'s polls"?></h3>
					<div class="row placeholders">
						<?php foreach ($otherUser['polls'] as $currentPoll) { ?>
						<div class="col-xs-12 col-sm-3 placeholder">
							<div class="placeholder-container">
								<a href=<?= "index.php?page=viewPoll&id=" . $currentPoll['idPoll'] . "&previous=Feed"; ?> id="modal-view">
									<img class="resize-to-fit-and-center placeholder-containter-img" href=<?= "index.php?page=viewPoll&id=" . $currentPoll['idPoll'] . "&previous=Feed"; ?> id="modal-view" src="<?= $currentPoll['image'] != '' ? UPLOADS_URL . "/" . $currentPoll['image'] : 'assets/img/default-poll.png' ?>" alt="Default poll image">
								</a>
							</div>
							
							<h4><?= $currentPoll['title']; ?></h4>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
