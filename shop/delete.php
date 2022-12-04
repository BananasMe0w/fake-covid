<?php
  include "connect.php";

  $id = $_GET['id'];
  $sql = "DELETE FROM `tbl_product` WHERE id='$id'";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    location='edit.php';
  </script>
  ";
?>
