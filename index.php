<?php

include "lib/get.php";
include "lib/json.php";
include "markhtml/markhtml.php";

$config = $json->re ($fileio->getfile ("config.json"));

$post = array();
for ($i = 0; $i < $config['post']; $i ++)
{
  $post[$i] = $fileio->getfile ("post/$i");
}

?>