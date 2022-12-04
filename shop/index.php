<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include "checknav.php"; ?>
    <?php include "logo.php"; ?>
    <hr>
    <?php include "carousel.php"; ?>
    <hr>
      <h3 class="text-center">รายการสินค้า</h3>
    <hr>
    <?php include "container.php";  ?>

    <div class="container bg-info mt-5">
      <div class="row">
        <div class="col-12">
          <p class="text-white mt-4 text-right"><b>สามารถโหวดสินค้าที่ชอบได้ที่หน้าเมนู vote หรือ <a href="vote.php"><button class="btn btn-warning" type="button" name="button">กดเพื่อไปหน้า vote</b> </button> </a> </p>
        </div>
        <?php
          include "connect.php";
          $sql = "SELECT* FROM tbl_product";
          $result = $con->query($sql);

          while ($row = $result->fetch_assoc()) {
        ?>
        <div class="col-4 mt-5">
          <div class="card-body text-light">
            <p>ชื่อสินค้า : <?php echo $row['name']; ?></p>
            <img class="d-block" style="width:250px; height:200px;" src="<?php echo $row['image']; ?>" alt="">
            <p class="mt-3"><b>ผลโหวต : <?php echo $row['vote']; ?></b> </p>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php include "footer.php"; ?>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
