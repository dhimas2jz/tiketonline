<?php
require_once "../_config/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="website admin ini di buat untuk memudahkan admin dalam memantau dan meninjau sebuah website, yaitu website ticketing online, jadi begitu ya agan semuanya">
    <meta name="author" content="dhimasmarwahyu">
    <title>Dhitravel | Travel fast like a teleport</title>
    <!-- script Bootstrap 3 -->
    <link href="../_assets/css/bootstrap.css" rel="stylesheet">
    <link href="../_assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- script Font Awesome 4 -->
    <link href="../_assets/css/font-awesome.css" rel="stylesheet">
    <link href="../_assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../_assets/css/user-style.css" rel="stylesheet">
    <link rel="icon" href="../_assets/img/icon-web.png">
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container" id="navbar">
    <div class="navbar-header">
      <a href="index.php" class="navbar-brand navbar-link">
        <img src="../_assets/img/logo.png">
      </a>
      <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navcol-1">
      <ul class="nav navbar-nav navbar-kiri">
        <li role="presentation"><a href="index.php"><i class="fa fa-plane"></i> Pesawat</a></li>
        <li role="presentation"><a href="kereta.php"><i class="fa fa-train"></i> Kereta</a></li>
        <li role="presentation"><a href="traveltips.php"><i class="fa fa-globe"></i> Travel Tips</a></li>
        <li role="presentation"><a href="informasi.php"><i class="fa fa-info-circle"></i> Informasi</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li role="presentation"><a> | </a></li>
        <?php
        if(isset($_SESSION['user'])) {
        echo '<li role="presentation"><a href="_auth/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
        }else{
        echo '<li role="presentation"><a href="_auth/login-user.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
<!-- slideshow / gambar bergerak -->
<div class="container page-styling">
  <div class="row">
    <?php if (isset($_GET['id_pemesanan'])): ?>
    <center><h3 style="margin-bottom: 40px;">Pembayaran</h3></center>
        <?php
            $sql = "SELECT * FROM tb_penumpang WHERE id_penumpang='$_SESSION[id_penumpang]'";
            $query = $sql;

        $sql_penumpang = mysqli_query($con, $query) or die (mysqli_error($con));
        if(mysqli_num_rows($sql_penumpang) > 0) {
          while($data = mysqli_fetch_array($sql_penumpang)) { ?>
          <center><h4 style="margin-top: 50px; margin-bottom: 30px;">Data Penumpang & Data Pemesanan</h4></center>
            <div class="col-sm-3" style="margin-left: 283px;">
              <div class="form-group">
                <label>Email :</label>
                <input type="text" name="email" value="<?=$data['email']?>" class="form-control" readonly>
              </div>
              <div class="form-group">
                <label>Nama Lengkap :</label>
                <input type="text" name="nama_penumpang" value="<?=$data['nama_penumpang']?>" class="form-control" readonly>
              </div>
              <div class="form-group">
                <label>Alamat :</label>
                <textarea style="height: 107px;" name="alamat_penumpang" class="form-control" readonly><?=$data['alamat_penumpang']?></textarea>
              </div>
              <div class="form-group">
                <label>Tanggal Lahir :</label>
                <input type="text" name="tanggal_lahir" value="<?=$data['tanggal_lahir']?>" class="form-control" readonly>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin :</label>
                <input type="text" name="jenis_kelamin" value="<?=$data['jenis_kelamin']?>" class="form-control" readonly>
              </div>
              <div class="form-group">
                <label>Nomor Telephone :</label>
                <input type="text" name="telephone" value="<?=$data['telephone']?>" class="form-control" readonly>
              </div>
            </div>
        <?php
      }
        }
        ?>
     <?php
            $sql = "SELECT * FROM tb_pemesanan INNER JOIN tb_rute ON tb_rute.id_rute = tb_pemesanan.id_rute INNER JOIN tb_transportasi ON tb_transportasi.id_transportasi = tb_rute.id_transportasi WHERE id_pelanggan='$_SESSION[id_penumpang]' AND id_pemesanan='$_GET[id_pemesanan]'";
            $query = $sql;

        $sql_pemesanan = mysqli_query($con, $query) or die (mysqli_error($con));
        if(mysqli_num_rows($sql_pemesanan) > 0) {
          while($data = mysqli_fetch_array($sql_pemesanan)) { ?>
    <div class="col-sm-3">
                <input type="hidden" name="id_pemesanan" value="<?=$data['id_pemesanan']?>" class="form-control" readonly>
                <div class="form-group">
                  <label>Kode Pemesanan :</label>
                  <input type="text" name="kode_pemesanan" value="<?=$data['kode_pemesanan']?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Kode Kursi :</label>
                  <input type="text" name="kode_kursi" value="<?=$data['kode_kursi']?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Tanggal Pemesanan :</label>
                  <input type="text" name="tanggal_pemesanan" value="<?=$data['tanggal_pemesanan']?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Tanggal Berangkat :</label>
                  <input type="text" name="tanggal_berangkat" value="<?=$data['tanggal_berangkat']?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Nama Transportasi :</label>
                  <input type="text" name="maskapai" value="<?=$data['nama_transportasi']?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Total Yang Harus Dibayar :</label>
                  <input type="text" name="total_bayar" value="<?= $data['total_bayar']; ?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                  <label>Bukti :</label>
                  <a href="../_assets/img3/<?= $data['bukti_pembayaran']; ?>" target="_blank" class="btn btn-info btn-block">Lihat Bukti</a>
                </div>
              </div>
              <?php if ($data['verifikasi'] == 'Sudah Bayar'): ?>
                  <div class="col-sm-4 col-sm-offset-4">
                    <a href="tiket.php?id_pemesanan=<?=$data['id_pemesanan']?>" target="_blank" class="btn btn-info btn-block">Cetak Tiket</a>
                  </div>
                <?php endif ?>
            <?php } } ?>
  <?php else: ?>
        <?php
            $sql = "SELECT * FROM tb_pemesanan WHERE id_pelanggan='$_SESSION[id_penumpang]' AND bukti_pembayaran <> ''";
            $query = $sql;

        $sql_pemesanan = mysqli_query($con, $query) or die (mysqli_error($con));
        if(mysqli_num_rows($sql_pemesanan) > 0) {
          while($data = mysqli_fetch_array($sql_pemesanan)) { ?>
            <div class="col-md-3">
              <div class="panel panel-primary">
                <div class="panel-heading"><?= $data['kode_pemesanan']; ?></div>
                <div class="panel-body">
                  <a href="history-payment.php?id_pemesanan=<?= $data['id_pemesanan']; ?>" class="btn btn-info btn-xs btn-block">Lihat Detail</a>
                </div>
              </div>
            </div>  
        <?php
      }
        }
        ?>
  <?php endif; ?>
  </div>
</div>
<!-- label abu abu  (sebelum about / pelengkap) -->
<div id="labelabu">
    <div class="row">
      <div class="col-sm-12">
        <div class="col-sm-8">
          <h4>Berlangganan newsletter spesial promo dan penawaran terbaik.</h4>
        </div>
        <div class="col-sm-2">
          <input type="text" name="email" class="form-control" placeholder="Masukan email Anda">
        </div>
        <div class="col-sm-2">
          <input type="submit" name="add" value="Berlangganan" class="btn btn-danger">
        </div>
      </div>
    </div>
</div>
<!-- about -->
<div id="about">
  <div class="container footer">
    <div id="subs" class="col-lg-4">
      <h3>Tentang Kami</h3>
      <p><a href="index.php">dhitravel.com</a> adalah website yang menyediakan tiket dengan sistem online, sehingga memudahkan pengguna dalam berpergian tanpa perlu membeli tiket secara langsung di stasiun atau bandara, hanya dengan dhitravel anda bisa pergi ke tempat destinasi anda.</p>
    </div>
    <div class="col-lg-3">
      <h3>Produk dan dukungan</h3>
      <p><a href="index.php">Pesawat</a></p>
      <p><a href="kereta.php">Kereta</a></p>
      <p><a href="traveltips.php">Travel Tips</a></p>
      <p><a href="informasi.php">Informasi</a></p>
      <p><a href="privacypolicy.php">Kebijakan dan Privasi</a></p>
      <p><a href="tos.php">Syarat dan Ketentuan</a></p>
    </div>
    <div class="col-lg-3">
        <h3>Hubungi Kami</h3>
        <div id="icon"><a href="https://www.instagram.com/dhitravel"><i class="fa fa-instagram"></i></a><a href="https://www.facebook.com/dhitravel"><i class="fa fa-facebook-official"></i></a><a href="https://www.twitter.com/dhitravel"><i class="fa fa-twitter-square"></i></a><a href="https://www.youtube.com/dhitravel"><i class="fa fa-youtube-play"></i></a></div>
        <h4>0805 1600 989</h4>
        <h5>cs@dhitravel.com</h5>
    </div>
  </div>
</div>
<!-- kaki -->
    <hr>
    <div id="kaki">
      <div class="container">
        <h5 class="text-center"><a href="privacypolicy.php">Kebijakan Privasi</a> - <a href="tos.php">Syarat dan Ketentuan</a></h5>
        <h5 class="text-center">Copyright © dhitravel.com - 2019 | designed by. dhimasmarwahyu</h5>
      </div>
    </div>
    </div>
<!-- script -->
<script src="../_assets/js/jquery.js"></script>
<script src="../_assets/js/bootstrap.min.js"></script>
</body>
</html>
