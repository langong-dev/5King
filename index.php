<?php

include "lib/get.php";
include "lib/json.php";
include "markhtml/markhtml.php";

$config = $json->re ($fileio->getfile ("config.json"));
$blogname = $config['name'];

$post = array();
$posttit = array();
$posttag = array();
for ($i = 1; $i <= $config['post']; $i ++)
{
  $post[$i] = $fileio->getfile ("post/$i");
  $posttit[$i] = $fileio->getline ("tit/$i", 1);
  $posttag[$i] = $fileio->getline ("tag/$i", 1);
}

?>

<html>
  <body>
    <div class="index-title">
      <br>
      <h1><?php $blogname ?></h1>
      <br>
    </div>

    <div class="index-post">

      <br>
      <?php
      
        for ($i = 1; $i <= $config['post']; $i ++)
        {
          echo "
          <h3>".$posttit[$i]."</h3>
          <span>In ".$tag[$i]."</span>
          <hr><br>
          ";
        }

      ?>
    </div>
  </body>
</html>