<?php 

if ($_COOKIE['login']=="")
  echo "<script>window.location.href=\"login.php\";</script>";

include "includes.php";

$list = array(
  'name' => $_POST['name'],
  'des' => $_POST['des']
);

$arr = array(
  "admin-password" => $config['admin-password'],
  "post" => $config['post'],
  "name" => $list['name'],
  "land" => $list['des']
);

$mjson = $json->to($arr);
// echo "<pre>".$mjson."</pre>";

$fileio->changeline ("../config.json", 1, $mjson);

echo "<script>window.location.href=\"./\";</script>";

?>