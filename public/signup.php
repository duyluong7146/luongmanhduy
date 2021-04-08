<?php require_once("../resources/config.php"); ?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../public/admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../public/admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../public/admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="../public/admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="POST">
        <?php signup_user() ?>
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Đăng kí</h3>
                <p>Vui lòng nhập thông tin người dùng.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="Tên đăng nhập" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="tel" name="phonenumber" required="" placeholder="Điện thoại" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="password" required="" placeholder="Mật khẩu" name="password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" placeholder="Xác nhận lại mật khẩu" name="confirmpassword" type="password">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit">Đăng kí tài khoản của tôi</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Để tạo tài khoản, bạn có đồng ý với <a href="#">các điều khoản?</a></span>
                    </label>
                </div>
                
            </div>
            <div class="card-footer bg-white">
                <p>Sẵn sàng là thành viên? <a href="login.php" class="text-secondary">Đăng nhập tại đây.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>