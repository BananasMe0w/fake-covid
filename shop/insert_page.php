<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include "checknav.php"; ?>

    <div class="container mt-5">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
          <div class="card">
            <div class="card-header bg-info">
              <h3 class="text-light">Edit</h3>
            </div>
            <div class="card-body">
              <?php
                include "connect.php";
                $id = $_GET['id'];
                $sql = "SELECT * FROM tbl_product WHERE id='$id'";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();
              ?>
              <form action="insert_script.php?id=<?php echo $row['id'] ?>" method="post">
                <div class="row">
                  <div class="col-12">
                    <h5>เพิ่มสินค้า</h5>
                  </div>
                  <div class="col-12">
                    <hr>
                  </div>
                  <div class="col-12 mt-2">
                    <label>รูปภาพ :</label>
                    <input class="form-control" placeholder="รูปภาพ" type="text" name="image_insert" value="images/mask/" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>ชื่อ :</label>
                    <input class="form-control" placeholder="ชื่อ" type="text" name="name_insert" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>ยี่ห่อ :</label>
                    <input class="form-control" placeholder="ยี่ห่อ" type="text" name="type_insert" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>ราคา :</label>
                    <input class="form-control" placeholder="ราคา" type="text" name="price_insert" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>จำนวนสินค้า :</label>
                    <input class="form-control" placeholder="จำนวนสินค้า" type="text" name="amount_insert" required>
                  </div>
                  <div class="col-12 mt-4">
                    <button class="btn btn-success" type="submit">insert</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
