<?php
 if(file_exists($_GET['p'])){
  $ext = explode('.', $_GET['p']);
  $ext = end($ext);
  if($ext=="jpg") $ext="jpeg";
  header("Content-Type: image/".$ext);
  echo file_get_contents($_GET['p']);
 }
?>