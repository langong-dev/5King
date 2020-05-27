<?php

if ($_COOKIE['login']=="")
  echo "<script>window.location.href=\"login.php\";</script>";

include "includes.php";
$pid = $_GET['pid'];
$val = $_POST['val'];

if ($val != "")
{
  $file = fopen("../post/$pid", "w");
  fwrite($file, $val);
  fclose($file);
  echo "<script>window.location.href=\"edit.php?pid=$pid\";</script>";
}

?>

<html>
  <head>
    <title><?php echo "Edit | ".$blogname ?></title>
  </head>
  <body>
    <?php echo $top ?>
    <div class="edit-title">
      <br>
      <h1><?php echo "Edit".$posttit[$pid] ?></h1>
      <span>In <?php echo $posttag[$pid] ?></span>
      <br>
    </div>

    <div class="edit-main">

      <br>
      <form action="update.php" method="post">
        <textarea name="val" rows="30">
          <?php echo $post[$pid] ?>
        </textarea>
      </form>
      <br>
    </div>
  </body>
</html>