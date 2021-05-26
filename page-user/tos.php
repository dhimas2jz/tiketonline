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
        <li role="presentation"><a href="informasi"><i class="fa fa-info-circle"></i> Informasi</a></li>
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
  <center><h3>Syarat dan Ketentuan</h3></center>
<!-- slideshow / gambar bergerak -->
<div class="container page-styling">
<h4>Umum</h4>
<p>
    Dengan mengakses dan menggunakan Website dan Layanan Kami, Anda menyatakan telah membaca, memahami, menyetujui dan menyatakan tunduk pada Syarat dan Ketentuan Penggunaan tiket.com ini. Jika Anda tidak dapat menyetujui Syarat dan Ketentuan Penggunaan tiket.com ini, baik secara keseluruhan ataupun sebagian, maka Anda tidak diperbolehkan untuk mengakses Website ini ataupun menggunakan Layanan yang Kami sediakan.
    Syarat dan Ketentuan Penggunaan tiket.com ini terdiri atas (i) syarat dan ketentuan umum yang berlaku untuk setiap akses dan Layanan yang tersedia pada Website, dan (ii) syarat dan ketentuan khusus yang mengatur lebih lanjut ketentuan penggunaan produk atau Layanan tertentu. Dalam hal ditemukan adanya perbedaan atau pertentangan antara syarat dan ketentuan umum dan syarat dan ketentuan khusus, maka yang berlaku adalah syarat dan ketentuan khusus.</p>
    <p>
    Syarat dan Ketentuan Penggunaan tiket.com dapat Kami ubah, modifikasi, tambah, hapus atau koreksi ("perubahan") setiap saat dan setiap perubahan itu berlaku sejak saat Kami nyatakan berlaku atau pada waktu lain yang ditetapkan oleh Kami; Anda Kami anjurkan untuk mengunjungi Website Kami secara berkala agar dapat mengetahui adanya perubahan tersebut.
    Dalam hal terdapat kesalahan informasi yang tercantum dalam Website, maka Anda menyetujui bahwa Kami dengan kebijaksanaan tunggal dan penuh dapat melakukan hal-hal tertentu, dengan atau tanpa alasan dan tanpa pemberitahuan sebelumnya kepada Anda, yaitu sebagai berikut:</p>
    <p>
        Menyesuaikan/mengoreksi kesalahan informasi sebagaimana dimaksud;
        Mengubah, menunda atau membatalkan sebagian atau seluruh transaksi yang telah Anda lakukan sehubungan dengan informasi yang ditampilkan dalam Website; dan/atau
        Melakukan hal-hal lain yang dianggap perlu oleh Kami.
    Syarat dan Ketentuan ini berlaku menggantikan semua versi sebelumnya, terhitung sejak versi sebelumnya ditampilkan dalam Website.

</p>
<p style="margin-bottom: 50px;">
  <h4>Penggunaan</h4>
    <p>Website ini dan Layanan yang tersedia didalamnya dapat digunakan oleh Anda hanya untuk penggunaan pribadi dan secara non-komersial dan setiap saat tunduk pada dan berlaku syarat dan ketentuan yang saat itu berlaku dalam Syarat dan Ketentuan Penggunaan tiket.com.
    Website ini dan produk-produk, teknologi dan proses yang terdapat atau terkandung dalam Website, dimiliki oleh Kami atau pihak ketiga yang memberi hak kepada Kami. Kecuali untuk penggunaan yang secara tegas diijinkan dan diperbolehkan dalam Syarat dan Ketentuan Penggunaan tiket.com ini, Anda tidak memiliki ataupun menerima dan tiket.com tidak memberikan hak lain apapun ke Anda atas Website ini, berikut dengan segala data, informasi dan konten didalamnya.</p>
    <p>
    Dengan menggunakan Website ini atau Layanan yang tersedia didalamnya, maka Anda menyatakan setuju tidak akan men-download, menayangkan atau mentransmisi dengan cara apa pun, dan atau membuat konten apa pun tersedia untuk umum yang tidak konsisten dengan penggunaan yang diijinkan dalam Syarat dan Ketentuan Penggunaan tiket.com ini.</p>
    <p>
    Dalam Website ini mungkin terdapat link (tautan) ke website yang dikelola oleh pihak ketiga ("Situs Eksternal"). Situs Eksternal disediakan hanya untuk referensi dan kenyamanan saja. tiket.com tidak mengoperasikan, mengendalikan atau mendukung dalam bentuk apa pun Situs Eksternal yang bersangkutan ataupun konten/isinya. Anda bertanggung jawab penuh atas penggunaan Situs Eksternal tersebut dan dianjurkan untuk mempelajari syarat dan ketentuan dari Situs Eksternal itu secara seksama.</p>
    <p>
    Layanan yang tersedia dalam Website ini secara umum menggunakan sistem re-marketing dan sistem cookies yang memungkinkan pihak ketiga (termasuk dan tidak terbatas pada Google) mengakses dan menggunakan data kunjungan dalam sistem Cookies website ini untuk menampilkan dan menayangkan kembali tiap iklan tiket.com melalui internet.</p>
    <p>
    Anda tidak boleh membuat link, melakukan screen capture atau data crawling ke Website tanpa adanya persetujuan tertulis sebelumnya dari tiket.com. Hal-hal tersebut dianggap sebagai pelanggaran hak milik intelektual tiket.com.</p>
<p style="margin-bottom: 50px;">
  <h4>Pemesanan/Pembelian Produk</h4>
  <p>
    Pemesanan/pembelian Produk dianggap berhasil atau selesai setelah Anda melakukan pelunasan pembayaran dan tiket.com menerbitkan dan mengirim ke Anda, Surat Konfirmasi pemesanan/pembelian. Apabila terjadi perselisihan atau permasalahan, maka data yang terdapat pada tiket.com akan menjadi acuan utama dan diangap sah.</p>
    <p>
    Dengan menyelesaikan pemesanan/pembelian, maka Anda dianggap setuju untuk menerima: (i) email yang akan Kami kirim tidak lama sebelum tanggal pelayanan yang Anda pesan, memberikan Anda informasi tentang Produk yang Anda beli, dan menyediakan Anda informasi dan penawaran tertentu (termasuk penawaran pihak ketiga yang telah Anda pilih sendiri) yang terkait dengan pemesanan dan tujuan Anda, dan (ii) email yang akan Kami kirim tidak lama setelah tanggal pelayanan untuk mengundang Anda untuk melengkapi formulir ulasan pengguna Produk Kami. Selain dari konfirmasi email yang menyediakan konfirmasi pemesanan dan email-email yang telah Anda pilih sendiri, Kami tidak akan mengirimi Anda pemberitahuan (yang diinginkan maupun yang tidak), email, korespondensi lebih lanjut, kecuali jika diminta secara khusus oleh Anda.
    Untuk jalur penerbangan internasional, pelanggan harus memiliki paspor dengan masa berlaku sekurang - kurangnya 6 (enam) bulan, pada saat tanggal keberangkatan dan/atau kepulangan.</p>
<p style="margin-bottom: 50px;">
  <h4>Kebijakan Penggunaan Data</h4>
  <p>
    Kami menganggap privasi Anda sebagai hal yang penting.</p>
    <p>
    Pada saat Anda membuat pemesanan di tiket.com, Kami akan mencatat dan menyimpan informasi dan data pribadi Anda. Pada prinsipnya, data Anda akan Kami gunakan untuk menyediakan Produk dan memberi Layanan kepada Anda. Kami akan menyimpan setiap data yang Anda berikan, dari waktu ke waktu, atau yang Kami kumpulkan dari penggunaan Produk dan Layanan Kami. Data pribadi Anda yang ada pada Kami, dapat Kami gunakan untuk keperluan akuntansi, tagihan, audit, verifikasi kredit atau pembayaran, serta keperluan security, administrasi dan legal, reward points atau bentuk sejenisnya, pengujian, pemeliharaan dan pengembangan sistem, hubungan pelanggan, promosi, dan membantu Kami dikemudian hari dalam memberi pelayanan kepada Anda. Sehubungan dengan itu, Kami dapat mengungkapkan data Anda kepada group perusahaan di mana tiket.com tergabung didalamnya, Mitra penyedia Produk, perusahaan lain yang merupakan rekanan dari tiket.com, perusahaan pemroses data yang terikat kontrak dengan Kami, agen perjalanan, badan pemerintah dan badan peradilan yang berwenang, di jurisdiksi manapun.
  </p>
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
