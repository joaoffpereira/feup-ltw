<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">

    <title>PollHub</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/frameworks/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/signin.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <h1>PollHub</h1>
      <h3>One hub, for all the polls.</h3>
    </header>

    <div class="container">
      <form class="form-signin" role="form" action="logic/classes/signIn.php" method="POST">
        <h2 class="form-signin-heading">Sign in</h2>

        <label for="inputUsername" class="sr-only">Username</label>
        <input type="username" name="inputUsername" id="inputUsername" class="form-control" placeholder="Username" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>

    <div class="create-account">
      <p><a id="link-signup" href="registerPage.php">Create an account</a></p>
    </div>

    <footer>
      <p>Copyright © 2014 PollHub</p>
    </footer>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
