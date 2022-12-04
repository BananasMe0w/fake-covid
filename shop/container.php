<div class="container">
  <div class="row">
    <?php
      $sql = "SELECT * FROM tbl_product";
      $result = $con->query($sql);

      while ($row = $result->fetch_assoc()) {
    ?>
    <div class="col-3 mt-5">
      <div class="card">
        <div class="card-header bg-info">
          <h4 class="text-white"><?php echo $row['name']; ?></h4>
        </div>
        <div class="card-body" style="height: 32rem;">
          <img class="d-block w-100" src="<?php echo $row['image']; ?>">
          <hr>
          <p>ยี่ห้อ : <?php echo $row['type']; ?></p>
          <p>ราคา/กล่อง : <?php echo number_format($row['price']); ?> </p>
          <p>จำนวนสินค้า : <?php echo number_format($row['amount']); ?></p>
          <hr>
          <?php
            if ($_SESSION['sess_status']==1) {
          ?>
          <a href="order_script.php?order_id=<?php echo $row['id']; ?>"><button class="btn btn-success" type="button">ลงตระกร้าสินค้า</button></a>
          <?php }elseif($_SESSION['sess_status']==2){?>
          <a href="order_script.php?order_id=<?php echo $row['id']; ?>"><button class="btn btn-success" type="button" disabled>ลงตระกร้าสินค้า</button></a><br>
          <sub class="text-danger">แอดมินไม่สามารถสั่งซื้อสินค้าได้</sub>
          <?php }else{ ?>
          <a href="order_script.php?order_id=<?php echo $row['id']; ?>"><button class="btn btn-success" type="button" disabled>ลงตระกร้าสินค้า</button></a><br>
          <sub class="text-danger">กรุณาลงชื่อเข้าใช้ก่อน</sub>
          <?php } ?>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>
