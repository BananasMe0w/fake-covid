<?php
  include "connect.php";

  $id = $_GET['id'];
  $sql = "DELETE FROM `tbl_cart` WHERE `tbl_cart`.`cart_id` = '$id'";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    location='order.php';
  </script>
  ";
?>
