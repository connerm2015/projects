<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
  </head>
  <body>
    <form action="login.php" method="post">
      <input type="text" id="email" placeholder="Email..."><br>
      <input type="password" id="password" placeholder="Password..."><br>
      <input type="submit" id="login" value="Log In">
    </form>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      console.log("page ready");
    });
  </script>
  </body>
</html>
