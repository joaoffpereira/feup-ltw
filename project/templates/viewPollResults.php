<?php 
include 'templates/navbar.php';
?>
<link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 main">
				<div class="my-polls-header page-header row">
					<h1 class="my-polls-header-title pull-left" id="modalPreviousPage" value=<?= $previousPage; ?>> <?= $previousPage; ?></h1>
				</div>

				<div class="modal fade" id="viewPollModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">
									<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
								</button>
								<h3 class="modal-title" id="myModalLabel"> <?= $poll['title'] ?> </h3>
								<h4 id="viewPollModalCategory" class="modal-category"> <?= $poll['category'] ?></h4>
							</div>

							<div class="content-fluid">
								<div class="modal-body">
									<?php
									$i=0;
									foreach($poll['questions'] as &$currentQuestion): ?>
									<div align="left">
										<div class="form-group-lg">
											<label><?=$currentQuestion['question'] ?></label>
										</div>

										<div class="form-group-sm">
											<?php foreach($currentQuestion['options'] as $currentOption): ?>
												<div class="radio">
													<label id="opt-label">
														<?php if($answered && $selectedOpt[$i] === $currentOption['idOption']) {?> <!-- selected -->
														<input type="radio" checked name=<?="".$i ?> value=<?="".$currentOption['idOption'] ?>>
														<div class="progress">
															<div id="opt-progress-bar" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" 
																										style=<?="width:".$currentOption['percentage']."%"?>>
															<label id="percentageLabel"><?=" [" . $currentOption['counterResult'] . "] " . $currentOption['option']?></label>
															</div>
														</div>
														<?php }
														else { ?> <!-- not selected -->
														<input type="radio" disabled name=<?="".$i ?> value=<?="".$currentOption['idOption'] ?>>
														<div class="progress">
															<div id="opt-progress-bar" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
																										style=<?="width:".$currentOption['percentage']."%"?>>
															<label id="percentageLabel"><?=" [" . $currentOption['counterResult'] . "] " . $currentOption['option']?></label>
															</div>
														</div>
														<?php } ?>
													</label>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
									<?php $i++; endforeach; ?>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" onclick=<?="redirect(".$poll['idPoll'].")"?>> Back </button>
								<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
