<?php
  include "connect.php";

  $email = $_POST['email_signin'];
  $password = $_POST['password_signin'];

  if ($email==''||$password=='') {
    echo "กรอกข้อมูลให้ครบ";
  }else {
    $sql = "SELECT * FROM tbl_user WHERE email='$email'";
    $result = $con->query($sql);

    if ($result->num_rows<1) {
      echo "
      <script type='text/javascript'>
        alert('ไม่เจออีเมลนี้ในระบบ');
        location='signin.php';
      </script>
      ";
    }else {
      $sql = "SELECT * FROM tbl_user WHERE email='$email' AND password='$password'";
      $result = $con->query($sql);

      if ($result->num_rows<1) {
        echo "
        <script type='text/javascript'>
          alert('รหัสผ่านไม่ถูกต้อง');
          location='signin.php';
        </script>
        ";
      }else {
       $row = $result->fetch_assoc();
       $_SESSION['sess_id'] = $row['id'];
       $_SESSION['sess_name'] = $row['name'];
       $_SESSION['sess_status'] = $row['status'];

       echo "
       <script type='text/javascript'>
         alert('เข้าสู่ระบบสำเร็จ');
         location='index.php';
       </script>
       ";
      }
    }
  }
?>
