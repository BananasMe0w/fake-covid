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
              <h3 class="text-light">Sign up</h3>
            </div>
            <div class="card-body">
              <form action="signup_script.php" method="post">
                <div class="row">
                  <div class="col-12">
                    <h5>กรอกข้อมูลส่วนตัว</h5>
                  </div>
                  <div class="col-6 mt-4">
                    <label>ชื่อ :</label>
                    <input class="form-control" placeholder="ชื่อจริง" type="text" name="name_signup" required>
                  </div>
                  <div class="col-6 mt-4">
                    <label>นามสกุล :</label>
                    <input class="form-control" placeholder="นามสกุล" type="text" name="surname_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>ที่อยู่ :</label>
                    <input class="form-control" placeholder="ที่อยู่" type="text" name="address_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>เบอร์โทรศัพท์ :</label>
                    <input class="form-control" placeholder="เบอร์โทรศัพท์" type="text" name="tel_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <hr>
                  </div>
                  <div class="col-12">
                    <h5>สมัครสมาชิก</h5>
                  </div>
                  <div class="col-12 mt-4">
                    <label>อีเมล :</label>
                    <input class="form-control" placeholder="อีเมล" type="email" name="email_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>รหัสผ่าน :</label>
                    <input class="form-control" placeholder="รหัสผ่าน" type="password" name="password_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>เช็ครหัสผ่าน :</label>
                    <input class="form-control" placeholder="เช็ครหัสผ่าน" type="password" name="repassword_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <button class="btn btn-success" type="submit">submit</button>
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
