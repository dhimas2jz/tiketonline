<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";
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
<div class="containercarousel">
  <br/>
    <div class="col-lg-32">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indikator bulat -->
      <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>   
      </ol> -->
<!-- deklarasi carousel -->
<div class="carousel-inner" role="listbox">
  <div class="item active">
    <a href="#home"><img src="../_assets/img/user-sampul.jpg"></a>
</div>
  <div class="item">
    <a href="#home"><img src="../_assets/img/user-sampul11.jpg"></a>
</div>
  <div class="item">
    <a href="#home"><img src="../_assets/img/user-sampul2.jpg"></a>
</div>
  <div class="item">
    <a href="#home"><img src="../_assets/img/user-sampul31.jpg"></a>
  </div>
  <div class="item">
    <a href="#home"><img src="../_assets/img/user-sampul32.jpg"></a>
  </div>           
</div>

<!-- panah next dan previous -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
      </div>
    </div>
</div>
<!-- container atas -->
<div class="container atas">
    <div class="row">
      <div class="panel-heading">
        <h3>Mau beli tiket Pesawat?</h3>
        <h4>pesan sekarang!</h4>
      </div>
    </div>
    <?php 
          $sql = mysqli_query($con, "SELECT * from tb_pemesanan");
          $num = mysqli_num_rows($sql);
          if($num <> 0)
          {
            $kode = $num + 1;
          }else{
            $kode = 1;
          }
            //mulai bikin kode
            $tgl = date('dmY');
            $bikin_kode = str_pad($kode, 3, "0", STR_PAD_LEFT);
            $tahun = date('Ym');
            $kode_jadi = "PSW{$tgl}{$bikin_kode}";
      ?>
      <div class="row" style="padding: 20px;">
      <form action="proses.php" method="post">
        <div class="col-sm-4">
          <div class="form-group">
            <label for="kode pemesanan">Kode Pemesanan :</label>
            <input type="text" name="kode_pemesanan" value="<?php echo $kode_jadi; ?>" id="kode_pemesanan" class="form-control" readonly required autofocus>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Rute :</label>
              <select name="id_rute" class="form-control">
                <?php
                $rute = mysqli_query($con, "SELECT * FROM tb_rute INNER JOIN tb_transportasi ON tb_transportasi.id_transportasi = tb_rute.id_transportasi INNER JOIN tb_type_transportasi ON tb_type_transportasi.id_type_transportasi = tb_transportasi.id_type_transportasi WHERE nama_type='Pesawat'");
                while ($data = mysqli_fetch_object($rute)){
                ?>
              <option value="<?= $data->id_rute; ?>"><?= $data->rute_awal; ?> - <?= $data->rute_akhir; ?></option>
              <option value="<?= $data->id_rute; ?>"><?= $data->rute_akhir; ?> - <?= $data->rute_awal; ?></option>
              <?php } ?>
              </select>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="tanggal pemesanan">Tanggal Pemesanan :</label>
            <input type="" name="tanggal_pemesanan" value="<?php echo date('Y/m/d'); ?>" class="form-control" readonly required>
          </div>  
        </div>
      </div>
      <div class="col-sm-4">
      <?php 
        $sql = mysqli_query($con, "SELECT * from tb_pemesanan");
        $num = mysqli_num_rows($sql);
        if($num <> 0)
        {
          $kode = $num + 1;
        }else{
          $kode = 1;
        }
          //mulai bikin kode
          $tgl = date('Ymd');
          $bikin_kode = str_pad($kode, 3, "0", STR_PAD_LEFT);
          $tahun = date('Ym');
          $kode_jadi = "PSTKK{$tgl}{$bikin_kode}";
       ?>
        <div class="form-group">
          <label for="kode kursi">Kode Kursi :</label>
          <input type="text" name="kode_kursi" value="<?php echo $kode_jadi; ?>" id="kode_kursi" class="form-control" readonly>
        </div>
      </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="tanggal_berangkat">Tanggal Berangkat :</label>
            <input type="date" name="tanggal_berangkat" class="form-control" required>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="jam berangkat">Jam Berangkat :</label>
            <input type="time" name="jam_berangkat" class="form-control" required>
          </div>
        </div>
            <?php
            $sql = "SELECT * FROM tb_penumpang WHERE id_penumpang='$_SESSION[id_penumpang]'";
            $query = $sql;

        $sql_penumpang = mysqli_query($con, $query) or die (mysqli_error($con));
        if(mysqli_num_rows($sql_penumpang) > 0) {
          while($data = mysqli_fetch_array($sql_penumpang)) { ?>
        <div class="row" style="padding: 20px;">
      <form action="proses.php" method="post">
        <div class="col-sm-4">
          <div class="form-group">
            <input type="hidden" name="id_pelanggan" value="<?=$data['id_penumpang']?>" id="id_pelanggan" class="form-control" readonly autofocus>
          </div>
        </div>
      <?php
      }
        }
        ?>
        <div class="form-group pull-right" style="padding-right: 14px;">
          <input type="submit" name="add" value="Pesan Tiket" class="btn btn-success">
        </div>
      </div>
</div>
<!-- icon cool -->
<div id="kolomicon">
  <div class="row">
    <div class="col-md-1"><img src="../_assets/img/icon-travel.png"></div>
    <div class="col-md-2">
      <h4>Smart Traveler.</h4>
      <h5>Pergi kemanapun dengan mudah dan cepat tanpa masalah.</h5>
    </div>
    <div class="col-md-1"><img src="../_assets/img/icon-dompet.png"></div>
    <div class="col-md-2">
      <h4>Save your money.</h4>
      <h5>Menghemat biaya anda dan jaminan uang kembali jika gagal.</h5>
    </div>
  </div>
  <div class="row">
    <div class="col-md-1"><img src="../_assets/img/icon-kalender.png"></div>
    <div class="col-md-2">
      <h4>Make Schedule.</h4>
      <h5>Memudahkan anda dalam mengatur tanggal, dan pesan kapanpun.</h5>
    </div>
    <div class="col-md-1"><img src="../_assets/img/icon-destinasi.png"></div>
    <div class="col-md-2">
      <h4>Take A Trip.</h4>
      <h5>Pesan dengan mudah kemanapun, dimanapun, dan kapanpun.</h5>
    </div>
  </div>
</div>
<!-- tombol scroll -->
    <a class="gotopbtn" href="#"> <i class="fa fa-arrow-up"></i> </a>
<!-- galeri -->
    <div class="gallery-section">
      <div class="inner-width">
        <h2>#galeridhitravel: Beberapa tempat wisata populer yang ada di Indonesia</h2>
        <h4><center>Rekomendasi berbagai destinasi tempat wisata menarik di seluruh Indonesia</center></h4>
        <div class="border"></div>
        <div class="gallery">

          <a href="../_assets/img2/1.png" class="image">
            <img src="../_assets/img2/1.png" alt="">
          </a>

          <a href="../_assets/img2/2.png" class="image">
            <img src="../_assets/img2/2.png" alt="">
          </a>

          <a href="../_assets/img2/3.png" class="image">
            <img src="../_assets/img2/3.png" alt="">
          </a>

          <a href="../_assets/img2/4.png" class="image">
            <img src="../_assets/img2/4.png" alt="">
          </a>

          <a href="../_assets/img2/5.png" class="image">
            <img src="../_assets/img2/5.png" alt="">
          </a>

          <a href="../_assets/img2/6.png" class="image">
            <img src="../_assets/img2/6.png" alt="">
          </a>

          <a href="../_assets/img2/7.png" class="image">
            <img src="../_assets/img2/7.png" alt="">
          </a>

          <a href="../_assets/img2/8.png" class="image">
            <img src="../_assets/img2/8.png" alt="">
          </a>

        </div>
      </div>
    </div>
<!-- kenapa dhitravel -->
<div class="title" style="margin-top: 90px;">
  <center><h2>Kenapa pesan tiket di dhitravel?</h2></center>
  <center><h4>kenapa memesan tiket di website dhitravel? padahal banyak situs ticketing lain?</h4></center>
</div>
    <div class="services">
      <div class="cen">
        <div class="service">
          <i class="glyphicon glyphicon-usd"></i>
          <h2>Harga Termurah</h2>
          <p>Memberikan harga yang lebih murah dari layanan lain.</p>
        </div>

        <div class="service">
          <i class="glyphicon glyphicon-ok-circle"></i>
          <h2>Jaminan Keamanan</h2>
          <p>Pelayanan keamanan akan kami jamin sampai anda lepas landas.</p>
        </div>

        <div class="service">
          <i class="glyphicon glyphicon-earphone"></i>
          <h2>Pelayanan 24/7</h2>
          <p>Kami selalu siap melayani keluhan anda 24 Jam setiap hari.</p>
        </div>

        <div class="service">
          <i class="glyphicon glyphicon-list-alt"></i>
          <h2>Mudah dan cepat</h2>
          <p>Pemesanan tiket pesawat/kereta dengan mudah dan cepat.</p>
        </div>

        <div class="service">
          <i class="glyphicon glyphicon-lock"></i>
          <h2>Pembayaran aman</h2>
          <p>Anda dapat transfer dari bank manapun dengan jaminan keamanan.</p>
        </div>

        <div class="service">
          <i class="glyphicon glyphicon-repeat"></i>
          <h2>Jaminan uang kembali</h2>
          <p>Kami akan menjamin uang anda kembali 100% apabila tiket tidak bisa digunakan.</p>
        </div>
      </div>
    </div>
<!-- div pesawat -->
<div class="title" style="margin-top: 90px;">
  <center><h2>Partner Kami</h2></center>
  <center><h4>partner kami dalam maskapai dan kereta api.</h4></center>
  <center><img style="width: 1380px;" src="../_assets/img2/icon-maskapai.png"></center>
</div>
<div class="title" style="margin-top: 90px;">
  <center><h2>Metode Pembayaran</h2></center>
  <center><h4>Bayar lebih mudah dengan bank apapun.</h4></center>
  <center><img style="width: 1100px; margin-top: 50px;" src="../_assets/img/bank-icon.jpg"></center>
</div>
<!-- label abu abu  (sebelum about / pelengkap) -->
<div id="labelabu">
    <div class="row">
      <div class="col-sm-12">
        <div class="col-sm-8">
          <h4>Berlangganan newsletter spesial promo dan penawaran terbaik.</h4>
        </div>
        <div class="col-sm-2">
          <input type="text" name="sendemail" class="form-control" placeholder="Masukan email Anda">
        </div>
        <div class="col-sm-2">
          <input type="submit" name="sendemail" value="subsemail" class="btn btn-danger">
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
