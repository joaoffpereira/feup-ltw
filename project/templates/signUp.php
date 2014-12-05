
	<!-- Custom styles for this template -->
	<link href="assets/css/signin.css" rel="stylesheet">
</head>
<body>
	<header>
		<h1>PollHub</h1>
		<h3>One hub, for all the polls.</h3>
	</header>

	<div class="container">
		<form class="form-signin" role="form" action="actions.php?action=signUp" method="POST">
			<h2 class="form-signin-heading">Sign up</h2>

			<label for="inputUsername" class="sr-only">Username</label>
			<input type="username" name="inputUsername" id="inputUsername" class="form-control" placeholder="Username" required autofocus>

			<div id="inputPasswordDiv" class="form-group has-error">
				<label for="inputPassword" class="sr-only" >Password</label>
				<input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
			</div>

			<input type="hidden" id="gender" name="inputGender" value="">
			<div class="btn-group btn-input clearfix form-dropdown">
				<button id="genderButton" type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown">
					<span data-bind="label">Gender </span><span class="caret"></span>
				</button>
				<ul id="genderMenu" class="dropdown-menu form-dropdown" role="menu">
					<li><a href="#">Female</a></li>
					<li><a href="#">Male</a></li>
				</ul>
			</div>

			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
		</form>
	</div>

	<div class="create-account">
		<p><a id="link-signup" href="index.php">« Back</a></p>
	</div>
