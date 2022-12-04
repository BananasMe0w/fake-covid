<?php  ?><?php
  include "connect.php";
  
  $image = $_POST['image_insert'];
  $name = $_POST['name_insert'];
  $type = $_POST['type_insert'];
  $price = $_POST['price_insert'];
  $amount = $_POST['amount_insert'];

  if ($image==''||$name==''||$type==''||$price==''||$amount=='') {
    echo "กรอกข้อมูลให้ครบ";
  }else {
      $sql = "INSERT INTO `tbl_product`(`image`, `name`, `type`, `price`, `amount`) VALUES ('$image','$name','$type','$price','$amount')";
      $result = $con->query($sql);

      echo "
      <script type='text/javascript'>
        location='edit.php';
      </script>
      ";
    }
?>
