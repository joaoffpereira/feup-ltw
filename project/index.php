<!DOCTYPE html>
<html>
<head>
  <title>Projeto LTW</title>
  <meta charset='UTF-8'>
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="logic/classes/loginAnimation.js"></script>
  <link rel="stylesheet" href="assets/styles.css">
</head>

<body>
  <div id="welcome">
    <h1>Welcome!</h1>
    <input id="loginButton" type="button" value="Login"/>
    <input id="registerButton" type="button" value="Register"/>
  </div>

  <div id="signup">
    <h1>Sign Up</h1>

    <form action="logic/classes/save_user.php" method="POST">
      <label>Username:<input type="text" name="username"></label>
      <label>Password:<input type="password" name="password"></label>
      <input type="submit" value="Register"/>
    </form>
  </div>

  <div id="login">
    <h1>Login</h1>

    <form action="logic/classes/login_user.php" method="post">
      <label>Username:<input type="text" name="username"></label>
      <label>Password:<input type="password" name="password"></label>
      <input type="submit" value="Login"/>
    </form>
  </div>

</body>
</html>
