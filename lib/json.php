<?php
class JSON
{
  function re ($json)
  {
    return json_decode($json, true);
  }
  function to ($arr=array())
  {
    return json_encode($arr);
  }
}

$json = new JSON;

?>
