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
              <h3 class="text-light">Sign in</h3>
            </div>
            <div class="card-body">
              <form action="signin_script.php" method="post">
                <div class="row">
                  <div class="col-12">
                    <h5>เข้าสู่ระบบ</h5>
                  </div>
                  <div class="col-12 mt-4">
                    <label>อีเมล :</label>
                    <input class="form-control" placeholder="อีเมล" type="email" name="email_signin" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>รหัสผ่าน :</label>
                    <input class="form-control" placeholder="รหัสผ่าน" type="password" name="password_signin" required>
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
