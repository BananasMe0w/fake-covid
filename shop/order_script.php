<?php
  include "connect.php";

  $id = $_GET['order_id'];
  $user_id = $_SESSION['sess_id'];

  $sql = "SELECT * FROM tbl_cart WHERE cart_id='$id'";
  $result = $con->query($sql);

  if ($result->num_rows>0) {
    $row = $result->fetch_assoc();
    $newqty = $row['quantity']+1;

    $sql2 = "UPDATE `tbl_cart` SET `quantity` = '$newqty' WHERE `cart_id` = '$id'";
    $result2 = $con->query($sql2);

    echo "
    <script type='text/javascript'>
      alert('เพิ่มลงตระกร้าสินค้าแล้ว');
      location='index.php';
    </script>
    ";
  }else{
    $sql = "INSERT INTO `tbl_cart`(`user_id`, `product_id`, `quantity`, `date`) VALUES ('$user_id','$id','1',now())";
    $result = $con->query($sql);

    echo "
    <script type='text/javascript'>
      alert('ลงตระกร้าสินค้าแล้ว');
      location='index.php';
    </script>
    ";
  }
?>
