<?php 
$previousPage = urldecode($_GET['previous']);
include 'templates/navbar.php';
?>
<link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 main">
				<div class="my-polls-header page-header row">
					<h1 class="my-polls-header-title pull-left"> <?= $previousPage; ?></h1>
				</div>

				<div class="modal fade" id="viewPollModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
								</button>
								<h3 class="modal-title" id="myModalLabel"> <?= $poll['title'] ?> </h3>
								<h4 class="modal-category" id="myModalCategory"> <?= $poll['category'] ?></h4>
							</div>

							<form id="answerPoll" method="POST" action=<?="actions.php?action=answerPoll&id=".$idPoll ?> >
								<div class="content-fluid">
									<div class="modal-body">
										<?php
										$i=0;
										foreach($poll['questions'] as &$currentQuestion): ?>
										<div id="poll-question" align="left">
											<div class="form-group-lg">
												<label><?=$currentQuestion['question'] ?></label>
											</div>
											<div class="form-group-sm">
												<?php foreach($currentQuestion['options'] as $currentOption): ?>
													<div class="radio">
														<label><input type="radio" name=<?="".$i ?> value=<?="".$currentOption['idOption'] ?>>
															<p><?= $currentOption['option'] ?></p>
														</label>
													</div>
												<?php endforeach; ?>
											</div>
										</div>
										<?php $i++; endforeach; ?>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary">Save changes</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
