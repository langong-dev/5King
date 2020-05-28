<?php

if ($_COOKIE['login']=="")
  echo "<script>window.location.href=\"login.php\";</script>";

include "includes.php";
$pid = $_GET['pid'];
$val = trim($_POST['val']);
$tit = trim($_POST['tit']);
$tag = trim($_POST['tag']);

if ($val != "")
{
  $file = fopen("../post/$pid", "w");
  fwrite($file, $val);
  fclose($file);
  $file = fopen("../tit/$pid", "w");
  fwrite($file, $tit);
  fclose($file);
  $file = fopen("../tag/$pid", "w");
  fwrite($file, $tag);
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
      <form action="edit.php?pid=<?php echo $pid ?>" method="post">
        <input type="text" name="tit" value="<?php echo $posttit[$pid] ?>"><br>
        <input type="text" name="tag" value="<?php echo $posttag[$pid] ?>"><br>
        <textarea name="val" rows="30"><?php echo $post[$pid] ?></textarea>
        <input type="submit" value=" Go ">
      </form>
      <br>
    </div>
  </body>
</html>