<?php
require_once "../_config/config.php";
if(isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url()."';</script>";
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Pengurus</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/login-style.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('_assets/icon_login.png')?>">
</head>
<body>
    <center><img src="../_assets/img/logo.png" style="margin-top:10px; height: 50px;"></center>
    <hr>
    <div align="center" style="margin-top: 110px;">
    <h3>dhitravel.com</h3>
    </div>
    <div align="center" style="margin-top: 330px;">
    <hr>
    <div id="kaki">
      <div class="container">
        <h5 class="text-center"><a href="../page-user/privacypolicy.php">Kebijakan Privasi</a> - <a href="../page-user/tos.php">Syarat dan Ketentuan</a></h5>
        <h5 class="text-center">Copyright © dhitravel.com - 2019 | designed by. dhimasmarwahyu</h5>
      </div>
    </div>
    </div>
    <div id="wrapper">
        <div class="container">
                <form class="box" action="" method="post" class="navbar-form">
                <img src="../_assets/icon_admin.png" width="100" height="100">
                <div align="center" style="margin-top: 20px;">
                    <?php
                if(isset($_POST['login'])) {
                    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                    $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
                    $sql_login = mysqli_query($con, "SELECT * FROM tb_pengurus WHERE username = '$user' AND password = '$pass'") or die (mysqli_error($con));
                    if(mysqli_num_rows($sql_login) > 0) {
                        $data = mysqli_fetch_object($sql_login);
                        $_SESSION['user'] = $user;
                        $_SESSION['level'] = $data->level;
                        echo "<script>window.location='".base_url()."';</script>";
                    } else { ?>
                        <div class="row">
                            <div class="col-lg-12 col-lg-offset-13">
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <a href="" class="close" data-dismiss="alert" aria-label=close">&times;</a>
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <strong>Login Gagal</strong> Username / password salah
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                }
                ?>
                <div align="center" style="margin-top:10px;">
                    <div class="form-group has-feedback">
                        <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
                    </div>
                    <div align="center" style="margin-top: 20px;">
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div align="center" style="margin-top: 20px;">
                    <div class="input-group">
                        <input type="submit" name="login" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?base_url('_assets/js/jquery.js')?>"></script>
    <script src="<?base_url('_assets/js/bootstrap.min.js')?>"></script>
</body>
</html>
<?php
}
?>