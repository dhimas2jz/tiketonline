<?php
require_once "../../_config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - dhitravel.com</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/login-user-style.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('_assets/img/icon-web.png')?>">
</head>
<body>
    <img src="../../_assets/img/logo.png">
    <hr>
    <div class="row">
        <div class="col-sm-2">
            <img src="../../_assets/img/icon-buku.png">
        </div>
        <div class="col-sm-3">
            <h4>Data pribadi aman</h4>
            <h5>Data pribadi anda akan disimpan dengan aman di database kami.</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="../../_assets/img/icon-debit.png">
        </div>
        <div class="col-sm-3">
            <h4>Pembayaran aman dan cepat</h4>
            <h5>Kami menjamin keamanan dalam pembayaran anda selama menggunakan layanan kami.</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="../../_assets/img/icon-petunjuk.png">
        </div>
        <div class="col-sm-3">
            <h4>Destinasi terbaik</h4>
            <h5>Dari sekian banyak destinasi anda, akan kami berikan yang terbaik dengan pelayanan kami.</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="../../_assets/img/icon-berangkat.png">
        </div>
        <div class="col-sm-3">
            <h4>Keamanan pengguna</h4>
            <h5>Kami akan menjamin dan siap bertanggung jawab atas keamanan anda sampai anda lepas landas.</h4>
        </div>
    </div>
    <hr>
    <div id="kaki">
      <div class="container">
        <h5 class="text-center"><a href="../privacypolicy.php">Kebijakan Privasi</a> - <a href="../tos.php">Syarat dan Ketentuan</a></h5>
        <h5 class="text-center">Copyright © dhitravel.com - 2019 | designed by. dhimasmarwahyu</h5>
      </div>
    </div>
    <div id="wrapper">
        <div class="container">
                <form class="box" action="" method="post" class="navbar-form">
                <h3 style="margin-top: -6px;">Masuk</h3>
                <div align="center" style="margin-top: 20px;">
                    <?php
                if(isset($_POST['login'])) {
                    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                    $pass = trim(mysqli_real_escape_string($con, $_POST['password']));
                    $sql_login = mysqli_query($con, "SELECT * FROM tb_penumpang WHERE username = '$user' AND password = '$pass'") or die (mysqli_error($con));
                    if(mysqli_num_rows($sql_login) > 0) {
                        $data = mysqli_fetch_object($sql_login);
                        $_SESSION['user'] = $user;
                        $_SESSION['id_penumpang'] = $data->id_penumpang;
                        echo "<script>window.location='".base_url('page-user/index.php')."';</script>";
                    } else { ?>
                        <div class="row">
                            <div class="col-lg-12 col-lg-offset-13">
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <a href="" class="close" data-dismiss="alert" aria-label=close">&times;</a>
                                    Username / password salah
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
                </div>
                <div align="center" style="margin-top: 20px;">
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                    </div>
                    <div align="left" style="margin-top: -2px;">
                    <a href="lupapassword/lupapassword-user.php">Lupa password?</a>
                    </div>
                <div align="center" style="margin-top: 20px;">
                    <div class="input-group">
                        <input type="submit" name="login" class="btn btn-primary" value="Login">
                    </div>
                </div>
                    atau
                <div align="center" style="margin-top: 10px;">
                    <a href="../index.php" class="btn btn-warning">Kembali</a>
                </div>
                    <div align="left" style="margin-top: 10px;">
                    belum memiliki akun? Daftar <a href="daftar-user/daftar-user.php">di sini</a>
                </form>
            </div>
        </div>
    </div>
    <script src="<?base_url('_assets/js/jquery.js')?>"></script>
    <script src="<?base_url('_assets/js/bootstrap.min.js')?>"></script>
</body>
</html>