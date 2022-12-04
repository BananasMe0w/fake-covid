<?php
  include "connect.php";

  if ($_SESSION['sess_status']==2) {
    include "admin_navbar.php";
  }else if ($_SESSION['sess_status']==1) {
    include "user_navbar.php";
  }else{
    include "navbar.php";
  }
?>
