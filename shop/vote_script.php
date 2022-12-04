<?php
  include "connect.php";

  $id = $_GET['id'];

  $sql = "SELECT * FROM tbl_product WHERE id='$id'";
  $result = $con->query($sql);

  if ($result) {
    $row = $result->fetch_assoc();
    $newvote = $row['vote']+1;

    $sql2 = "UPDATE `tbl_product` SET `vote`='$newvote' WHERE id='$id'";
    $result2 = $con->query($sql2);

    echo "
    <script type='text/javascript'>
      location='vote.php';
    </script>
    ";
  }
?>
