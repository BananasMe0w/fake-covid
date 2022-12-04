<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body onload="window.print()">
    <div class="container">
      <?php
        include "connect.php";
        $sql = "SELECT * FROM tbl_cart WHERE user_id='$_SESSION[sess_id]'";
        $result = $con->query($sql);

        while ($row = $result->fetch_assoc()) {?>
      <div class="row">
        <div class="col-12">
          <b>รหัสใบเสร็จ</b> #<?php echo $row['cart_id']; ?>
        </div>
        <div class="col-12">
          <p>
            <b>เวลา/วันที่ :</b>
            <?php echo $row['date']; ?>
          </p>
        </div>
        <div class="col-12">
          <?php
            $sql2 = "SELECT * FROM tbl_user WHERE id='$_SESSION[sess_id]'";
            $result2 = $con->query($sql2);
            $row2 = $result2->fetch_assoc();
          ?>
          <b>ชื่อผู้ซื้อ</b> : <?php echo $row2['name'] ?>
        </div>
      </div>
      <table class="table table-responsive-lg mt-4">
        <thead>
          <th>ชื่อสินค้า</th>
          <th>จำนวน</th>
          <th>ราคา</th>
        </thead>
        <tbody>
          <?php
              $sql2 = "SELECT *FROM tbl_product WHERE id='$row[product_id]'";
              $result2 = $con->query($sql2);
              while ($row2 = $result2->fetch_assoc()) {

              $total = $total + $row['quantity']*$row2['price'];
          ?>
          <tr>
            <td><?php echo $row2['name']; ?></td>
            <td>
              <?php echo $row['quantity']; ?>
            </td>
            <td><?php echo $row2['price']; ?></td>
          </tr>
          <?php }} ?>
          <tr>
            <td></td>
            <td></td>
            <td>ราคารวม : <?php echo $total ?></td>
          </tr>
        </tbody>
      </table>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
