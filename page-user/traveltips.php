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
  <center><h2 style="margin-bottom: 30px;">Travel Tips / Tips Traveling untuk para traveler.</h2></center>
<!-- slideshow / gambar bergerak -->
<div class="container page-styling">
<center><img src="../_assets/img2/traveling-traveltips.jpg" style="margin-bottom: 30px;"></center>
<h4>
Belakangan ini, travelling seakan menjadi sebuah kebutuhan primer bagi sebagian orang. Biasanya mereka mengunjungi tempat-tempat wisata lokal atau bahkan plesiran hingga ke negeri tetangga. Banyak orang yang memiliki ketakutan apakah tempat yang akan dikunjunginya tersebut aman atau tidak.</h4>
<h4 style="margin-bottom: 20px;">
Banyak sekali tempat di dunia ini yang bisa dibilang tidak aman, mungkin di lingkungan Anda pun ada yang seperti itu. Namun, hal itu sepenuhnya bisa Anda tangani jika memperhatikan beberapa tips travelling berikut ini.</h4>

<p style="margin-bottom: 20px;">
1. Cek Kembali
Biasakan untuk mengecek kembali barang bawaan Anda ketika akan meninggalkan suatu tempat. Travelling memungkinkan Anda membawa lebih banyak barang, sehingga Anda pun akan mudah lupa meninggalkan jaket atau jurnal di tempat yang akan Anda kunjungi.</p>

<p style="margin-bottom: 20px;">
2. Taruh Sumber Uang di Tempat yang Berbeda
Jika akan travelling, jangan menaruh semua uang, kartu kredit dan kartu ATM dalam dompet atau tas. Baiknya, pisahkan beberapa hal tersebut di tempat yang berbeda agar tidak menyulitkan Anda saat salah satu dari benda tersebut hilang.</p>

<p style="margin-bottom: 20px;">
3. Hindari Menaruh Dompet di Saku Belakang
Jangan pernah menaruh dompet di saku belakang celana saat Anda sedang travelling ke suatu tempat. Hal ini bertujuan agar Anda tidak kecopetan. Baiknya taruh dompet di saku depan atau lebih aman lagi, letakanlah di dalam saku jaket bagian dalam.</p>

<p style="margin-bottom: 20px;">
4. Scan Semua Dokumen Penting
Scan semua dokumen penting perjalanan Anda dan taruhlah di email Pribadi atau smartphone Anda. Atau cara mudahnya fotokopi semua paspor, visa, asuransi travel, dan hal yang lain dan simpan di dalam satu tempat.</p>
<p>
    Anda akan kesulitan jika identitas atau surat pribadi Anda hilang saat travelling ke suatu tempat. Scan dokumen penting akan membantu Anda untuk berjaga-jaga dan mendapatkan dokumen yang Anda butuhkan dengan mudah.</p>

<p style="margin-bottom: 20px;">
5. Jangan Terlalu Mudah Percaya
Memang lumrah jika sedang travelling ke suatu tempat dan kita tidak percaya dengan penduduk lokal tersebut. Namun, ada beberapa batasan yang mungkin perlu diingat, seperti akan mengunjungi suatu tempat yang berisiko tinggi. Anda harus bisa mempercayai penduduk lokal agar bisa mendapatkan bantuan saat mengalami kesulitan.</p>

<p style="margin-bottom: 20px;">
6. Suntik Vaksinasi
Kunjungi dokter atau rumah sakit sebelum travelling untuk mendapatkan vaksinasi atau imunisasi. Selain itu, Anda juga harus memperhatikan tindakan pencegahan jika mengalami masalah kesehatan.</p>

<p style="margin-bottom: 20px;">
7. Jangan Memamerkan Barang Berharga
Jika Anda akan plesiran ke suatu tempat dan Anda memiliki harta lebih dari penduduk lokal, ada baiknya jangan memamerkan benda berharga. Hal ini untuk menghindari Anda menjadi target dari seorang pencuri. Tinggalkan lah perhiasan Anda di hotel dan taruhlah kamera Anda di dalam tas saat tidak digunakan.</p>

<p style="margin-bottom: 20px;">
8. Jangan Memaksakan Diri Untuk Hal yang Baru
Jangan pernah memaksakan diri Anda untuk mempelajari mengendarai sepeda motor atau jet ski di luar negara sendiri. Sebagai contoh, di Thailand 38 orang meninggal setiap harinya karena kecelakaan sepeda motor. Ada beberapa asuransi travelling yang tidak akan mengcover hal tersebut.</p>

<center><img src="../_assets/img2/human-traveltips.jpg" style="margin-bottom: 30px; margin-top: 30px;"></center>

<p style="margin-bottom: 20px;">
9. Tanya Kualifikasi Instruktur
Jika Anda ingin mencoba hal yang baru seperti menyelam atau mungkin yang lebih menantang seperti bungee jumping, maka Anda harus menanyakan kualifikasi si operator atau instruktur untuk keamanan. Selalu ada alasan kenapa setiap les-les tersebut memiliki harga lebih rendah dari biasanya. PADI (Professional Association of Diving Instructors) memiliki daftar pelatih yang sudah terkualifikasi.</p>

<p style="margin-bottom: 20px;">
10. Jangan Pernah Meninggalkan Barang Anda di Tempat Umum
Mungkin hal ini sering Anda dengar, tapi masih banyak orang yang masih melakukannya. Selalu kaitkan tas Anda di kaki atau kursi jika Anda sedang berada di restoran.</p>

<p style="margin-bottom: 20px;">
11. Lebih Baik Memberi
Ada beberapa aturan simple namun banyak orang sulit untuk mengikutinya. Jika kamu ditodong berikan saja barang Anda seperti dompet atau jam. Hal ini bukanlah suatu masalah jika Anda memiliki asuransi perjalanan. Lakukan hal itu agar diri Anda tidak dicederai.</p>

<p style="margin-bottom: 20px;">
12. Jangan Memberi Kepada Pengemis
Ada pengecualian tentang hal ini, seperti seorang biksu. Tapi secara umum, jangan pernah memberikan uang kepada orang di jalan. Jika Anda ingin membantu sumbangkanlah sejumlah uang ke badan amal setempat.</p>

<center><img src="../_assets/img2/cc-traveltips.jpg" style="margin-bottom: 30px; margin-top: 30px;"></center>

<p style="margin-bottom: 20px;">
13. Hati-hati Menggunakan Kartu Kredit Anda di Warung Internet
Komputer di warung internet (warnet) mungkin memiliki software keylogger atau hardware yang bisa menditeksi username dan password akun Anda atau keterangan kartu kredit. Cara termudah untuk menghindari hal ini adalah bukalah beberapa browser dan masukanlah beberapa data yang salah ke salah satu browser yang Anda buka.</p>

<p style="margin-bottom: 20px;">
14. Jangan Mengelus Anjing atau Kucing Liar
Ini adalah salah satu hal yang harus Anda ingat, jangan pernah mengelus anjing atau kucing liar. Kemungkinan besar beberapa hewan liar tersebut terinfeksi rabies. Selain itu, jangan pernah memberikan makan kepada monyet liar jika Anda tidak kehilangan barang berharga.</p>

<p style="margin-bottom: 20px;">
15. Selalu Waspada dengan Rekan Travel Anda
Seringkali rekan Anda mengambil risiko yang juga akan membahayakan keselamatan Anda. Mereka justru akan meminta bantuan dari orang-orang yang segan untuk di dekati. Jika mereka terus menerus membuat Anda tidak nyaman, cobalah berpisah dari mereka.</p>

<p style="margin-bottom: 20px;">
16. Carilah Asuransi Perjalanan
Yang terakhir dan paling penting adalah carilah asuransi perjalanan. Hal ini untuk mengcover biaya kesehatan jika Anda sakit atau terluka sementara di luar negeri. Biaya rumah sakit dapat dengan cepat masuk ke menguras kantong Anda, bahkan untuk luka ringan. Jadi, jika Anda senang travelling, memiliki asuransi perjalanan sangatlah penting.</p>
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
