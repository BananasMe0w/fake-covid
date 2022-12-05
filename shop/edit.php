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
      <div class="row">
        <div class="col-12 mt-4" align="right">
          <a href="insert_page.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary" type="button">เพิ่มข้อมูล</button></a>
        </div>
        <div class="col-12">
          <hr>
        </div>
        <?php
          $sql = "SELECT * FROM tbl_product";
          $result = $con->query($sql);

          while ($row = $result->fetch_assoc()) {
        ?>
        <div class="col-3 mt-4">
          <div class="card">
            <div class="card-header bg-info">
              <h4 class="text-white"><?php echo $row['name']; ?></h4>
            </div>
            <div class="card-body" style="height: 32rem;">
              <img class="d-block w-100" src="<?php echo $row['image']; ?>">
              <hr>
              <p>ยี่ห้อ : <?php echo $row['type']; ?></p>
              <p>ราคา/กล่อง :<?php echo number_format($row['price']); ?> </p>
              <p>จำนวนสินค้า : <?php echo number_format($row['amount']); ?></p>
              <hr>
              <a href="edit_page.php?id=<?php echo $row['id']; ?>"><button class="btn btn-info" type="button">แก้ไขข้อมูล</button></a>
              <a href="delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger" type="button">ลบข้อมูล</button></a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
