<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include "checknav.php"; ?>
    <div class="container">
      <table class="table table-responsive-lg">
        <thead>
          <th>ชื่อสินค้า</th>
          <th>รูปภาพ</th>
          <th>จำนวน</th>
          <th>ราคา</th>
          <th>
            action
            <a href="bill.php"><button class="btn btn-success" type="button">buy</button></a>
          </th>
        </thead>
        <tbody>
          <?php
            $sql = "SELECT * FROM tbl_cart WHERE user_id='$_SESSION[sess_id]'";
            $result = $con->query($sql);

            while ($row = $result->fetch_assoc()) {
              $sql2 = "SELECT *FROM tbl_product WHERE id='$row[product_id]'";
              $result2 = $con->query($sql2);
              while ($row2 = $result2->fetch_assoc()) {

              $total = $total + $row['quantity']*$row2['price'];
          ?>
          <tr>
            <td><?php echo $row2['name']; ?></td>
            <td><img class="d-block w-50" src="<?php echo $row2['image']; ?>"></td>
            <td>
              <?php echo $row['quantity']; ?>
              <a href="add_qty.php?add_id=<?php echo $row['cart_id']; ?>"><button class="btn" type="button">></button></a>
            </td>
            <td><?php echo $row2['price']; ?></td>
            <td><a href="delete_order.php?id=<?php echo $row['cart_id']; ?>"><button class="btn btn-danger" type="button">delete</button></a></td>
          </tr>
          <?php }} ?>
          <tr>
            <td></td>
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
