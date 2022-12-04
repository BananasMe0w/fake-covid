<?php
  include "connect.php";

  unset($_SESSION['sess_id']);
  unset($_SESSION['sess_name']);
  unset($_SESSION['sess_status']);
  session_destroy();
  
  echo "
  <script type='text/javascript'>
    location='index.php';
  </script>
  ";
?>
