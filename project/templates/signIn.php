	<!-- Custom styles for this template -->
	<link href="assets/css/signin.css" rel="stylesheet">
</head>
<body>
	<header>
		<h1>PollHub</h1>
		<h3>One hub, for all the polls.</h3>
	</header>

	<div class="container">
		<form class="form-signin" role="form" action="actions.php?action=signIn" method="POST">
			<h2 class="form-signin-heading">Sign in</h2>

			<label for="inputUsername" class="sr-only">Username</label>
			<input type="username" name="inputUsername" id="inputUsername" class="form-control" placeholder="Username" required autofocus>

			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>

			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div>

	<div class="create-account">
		<p><a id="link-signup" href="?page=signUp">Create an account</a></p>
	</div>
