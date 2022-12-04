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
              <form action="edit_script.php?id=<?php echo $row['id'] ?>" method="post">
                <div class="row">
                  <div class="col-12">
                    <h5>แก้ไขข้อมูลสินค้า</h5>
                  </div>
                  <div class="col-12">
                    <hr>
                  </div>
                  <div class="col-12 mt-2">
                    <label>รูปภาพ :</label>
                    <input class="form-control" placeholder="รูปภาพ" type="text" name="image_edit" value="<?php echo $row['image']; ?>" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>ชื่อ :</label>
                    <input class="form-control" placeholder="ชื่อ" type="text" name="name_edit" value="<?php echo $row['name']; ?>" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>ยี่ห่อ :</label>
                    <input class="form-control" placeholder="ยี่ห่อ" type="text" name="type_edit" value="<?php echo $row['type']; ?>" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>ราคา :</label>
                    <input class="form-control" placeholder="ราคา" type="text" name="price_edit" value="<?php echo $row['price']; ?>" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>จำนวนสินค้า :</label>
                    <input class="form-control" placeholder="จำนวนสินค้า" type="text" name="amount_edit" value="<?php echo $row['amount']; ?>" required>
                  </div>
                  <div class="col-12 mt-4">
                    <button class="btn btn-success" type="submit">save</button>
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
