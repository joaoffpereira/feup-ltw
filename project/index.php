<!DOCTYPE html>
<html>
  <head>
    <title>PollHub</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="assets/styles.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="logic/classes/loginAnimation.js"></script>
  </head>
  <body>
    <div id="welcome">
      <h1>Welcome!</h1>
      <input id="loginButton" type="button" value="Login"/>
      <input id="registerButton" type="button" value="Register"/>
    </div>

    <div id="signup">
      <h1>Sign Up</h1>

      <form action="logic/classes/registerUser.php" method="POST">
        <label>Username:<input type="text" name="username"></label>
        <label>Password:<input type="password" name="password"></label>
        <input type="submit" value="Register"/>
      </form>
    </div>

    <div id="login">
      <h1>Login</h1>

      <form action="logic/classes/loginUser.php" method="post">
        <label>Username:<input type="text" name="username"></label>
        <label>Password:<input type="password" name="password"></label>
        <input type="submit" value="Login"/>
      </form>
    </div>
  </body>
</html>
