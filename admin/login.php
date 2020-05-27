<?php

include "includes.php";

$pass = trim ($_POST['pass']);
if ($pass != "")
{
  if ($pass == $config['admin-password'])
  {
    setcookie ('login', '1');
    echo "<script>window.location.href=\"./\";</script>";
  }
  else{
    $log = 1;
  }
}
else{
  $log = 0;
}

?>

<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <h1>Welcome back! Login...</h1>
    <br>
    <br>
    <?php 
      echo "
      <center>
      <h2>Login</h2>
      <br>";
      if ($log == 1) echo "Password Error";
      echo "<br>
      <form action=\"login.php\" method=\"post\">
      <br><br>
      <div class=\"input\"> 
      <input type=\"password\" name=\"pass\" placeholder=\"Password\">
      </div>
      <br><br>
      <div class=\"b\">
      <input type=\"button\" onclick=\"javascrtpt:window.location.href='/'\" value=\" < Home \">
      <input type=\"submit\" value=\" Go \">
      </div>
      </form>
      </center>
      "; 
    ?>
  </body>
</html>