	<!-- Custom styles for this template -->
	<link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
	<?php include 'navbar.php'; ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 main">
				<h1 class="page-header">Welcome, <?= $_SESSION['username'] ?>!</h1>

				<div class="row placeholders">
				<!--	   <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>-->
					<div class="col-xs-6 col-sm-3 placeholder">
						<img id="currentImage" data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
						<div class="newImageBox">
							<input id="profile-image-upload" class="hidden" type="file">
						</div>
					</div>

					<div id="changeLogin">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  						Change login
					</button>

					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					        <h4 class="modal-title" id="myModalLabel"> Change login</h4>
					      </div>
					      <div class="modal-body">
					        <div class="form-group">
              					<input type="text" class="form-control" name="newUsername" placeholder="Username">
        					</div>
        					<div class="form-group">
              					<input type="text" class="form-control" name="newPassword" placeholder="New Password">
        					</div>
					      </div>

					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					        <button type="button" class="btn btn-primary">Save changes</button>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>

<!-- NOT WORKING YET -
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function($) {
	$('#currentImage').click(function() {
		$('.newImageBox').click();
	});
});
</script>-->
