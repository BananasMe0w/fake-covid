<?php
  $host = "localhost";
  $user = "root";
  $d_password = "meowmeow";
  $database = "shop";

  $con = new mysqli($host, $user, $d_password, $database);
  session_start();
?>
