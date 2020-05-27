<?php

$pid = $_GET['pid'];

include "lib/head.php";

?>

<html>
  <head>
    <title><?php echo $posttit[$pid]." | ".$blogname ?></title>
  </head>
  <body>
    <?php echo $top ?>
    <div class="post-title">
      <br>
      <h1><?php echo $posttit[$pid] ?></h1>
      <span>In <?php echo $posttag[$pid] ?></span>
      <br>
    </div>

    <div class="post-main">

      <br>
      <?php
      
        echo $post[$pid];

      ?>
      <br>
    </div>
  </body>
</html>