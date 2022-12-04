<?php
  include "connect.php";

  $name = $_POST['name_signup'];
  $surname = $_POST['surname_signup'];
  $address = $_POST['address_signup'];
  $tel = $_POST['tel_signup'];
  $email = $_POST['email_signup'];
  $password = $_POST['password_signup'];
  $repassword = $_POST['repassword_signup'];

  if ($name==''||$surname==''||$address==''||$tel==''||$email==''||$password==''||$repassword=='') {
    echo "กรอกข้อมูลให้ครบ";
  }else if ($password <> $repassword) {
    echo "
    <script type='text/javascript'>
      alert('รหัสผ่านไม่ตรงกัน');
      location='signup.php';
    </script>
    ";
  }else {
    $sql = "SELECT * FROM tbl_user WHERE email='$email'";
    $result = $con->query($sql);

    if ($result->num_rows>0) {
      echo "
      <script type='text/javascript'>
        alert('อีเมลนี้ได้สมัครสมาชิกไปแล้ว');
        location='signup.php';
      </script>
      ";
    }else {
      $sql = "INSERT INTO `tbl_user`(`name`, `surname`, `address`, `tel`, `email`, `password`, `status`) VALUES ('$name','$surname','$address','$tel','$email','$password','1')";
      $result = $con->query($sql);

      if ($result->num_rows>0) {
        echo "
        <script type='text/javascript'>
          alert('เกิดข้อผิดพลาด');
          location='signup.php';
        </script>
        ";
      }else {
        echo "
        <script type='text/javascript'>
          alert('สำเร็จ');
          location='signin.php';
        </script>
        ";
      }
    }
  }
?>
