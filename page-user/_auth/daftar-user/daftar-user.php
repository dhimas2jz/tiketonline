<?php
require_once "../../../_config/config.php";
require "../../../_assets/libs/vendor/autoload.php";
if(isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url('page-user/index.php')."';</script>";
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
    <title>Login - dhitravel.com</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/daftar-user-style.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('_assets/img/icon-web.png')?>">
</head>
<body>
    <img src="../../../_assets/img/logo.png">
    <hr>
    <div class="row">
        <div class="col-sm-2">
            <img src="../../../_assets/img/icon-buku.png">
        </div>
        <div class="col-sm-3">
            <h4>Data pribadi aman</h4>
            <h5>Data pribadi anda akan disimpan dengan aman di database kami.</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="../../../_assets/img/icon-debit.png">
        </div>
        <div class="col-sm-3">
            <h4>Pembayaran aman dan cepat</h4>
            <h5>Kami menjamin keamanan dalam pembayaran anda selama menggunakan layanan kami.</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="../../../_assets/img/icon-petunjuk.png">
        </div>
        <div class="col-sm-3">
            <h4>Destinasi terbaik</h4>
            <h5>Dari sekian banyak destinasi anda, akan kami berikan yang terbaik dengan pelayanan kami.</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="../../../_assets/img/icon-berangkat.png">
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
                <form class="box" action="proses.php" method="post" class="navbar-form">
                <h3 style="margin-top: -12px;">Daftar</h3>
                <div align="center" style="margin-top: 0px;">
                        <div class="row">
                        </div>
                <div align="center" style="margin-top:8px;">
                    <div class="form-group has-feedback">
                        <input type="text" name="nama_penumpang" class="form-control" placeholder="Nama Lengkap" required autofocus>
                    </div>
                </div>
                <div align="center" style="margin-top: 8px;">
                    <div class="form-group has-feedback">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                </div>
                <div align="center" style="margin-top: 8px;">
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div align="center" style="margin-top: 8px;">
                    <div class="form-group has-feedback">
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required>
                </div>
                <div align="center" style="margin-top: 8px;">
                    <div class="form-group has-feedback">
                        <textarea name="alamat_penumpang" id="alamat_penumpang" class="form-control" placeholder="Alamat Lengkap" required></textarea>
                </div>
                <div align="left" style="margin-top: 8px;">
                    <div class="form-group has-feedback">
                        <label for="jenis_kelamin">Jenis Kelamin :</label>
                        <label></label>
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </div>
                <div align="center" style="margin-top: 8px;">
                    <div class="form-group has-feedback">
                        <input type="text" name="telephone" class="form-control" placeholder="No Telephone" required>
                </div>
                    </div>
                <div align="center" style="margin-top: 8px;">
                    <div class="input-group">
                        <input type="submit" name="add" class="btn btn-primary" value="Daftar">
                    </div>
                </div>
                    <div align="left" style="margin-top: 8px;">
                    Sudah memiliki akun? Masuk <a href="../login-user.php">di sini</a>
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