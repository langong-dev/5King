<?php

if ($_COOKIE['login']=="")
  echo "<script>window.location.href=\"login.php\";</script>";

include "includes.php";
$pid = $config['post']+1;
$val = trim($_POST['val']);
$tit = trim($_POST['tit']);
$tag = trim($_POST['tag']);

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

?>
