<?php  ?><?php
  include "connect.php";
  $id = $_GET['id'];
  $image = $_POST['image_edit'];
  $name = $_POST['name_edit'];
  $type = $_POST['type_edit'];
  $price = $_POST['price_edit'];
  $amount = $_POST['amount_edit'];

  if ($image==''||$name==''||$type==''||$price==''||$amount=='') {
    echo "กรอกข้อมูลให้ครบ";
  }else {
      $sql = "UPDATE `tbl_product` SET `image`='$image',`name`='$name',`type`='$type',`price`='$price',`amount`='$amount' WHERE id='$id'";
      $result = $con->query($sql);

      echo "
      <script type='text/javascript'>
        location='edit.php';
      </script>
      ";
    }
?>
