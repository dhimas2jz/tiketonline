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
  <center><h3>Kebijakan Dan Privasi</h3></center>
<!-- slideshow / gambar bergerak -->
<div class="container page-styling">
<h4>Aturan Privasi</h4>
<p>Kebijakan Privasi ini mengatur dan atau menjelaskan seluruh layanan yang sudah Kami sediakan untuk Anda (“Pengguna”) gunakan, baik layanan yang Kami operasikan sendiri maupun yang dioperasikan melalui afiliasi dan/atau rekanan Kami. Untuk menjaga kepercayaan Anda kepada Kami, maka Kami senantiasa akan menjaga segala kerahasiaan yang terkandung dalam data pribadi Anda, karena Kami menganggap privasi Anda sangat penting bagi Kami. Dalam aturan privasi ini Kami sertakan penjelasan mengenai tata cara Kami mengumpulkan, menggunakan, mengungkapkan, memproses dan melindungi informasi dan data pribadi Anda yang Kami identifikasi (“Data Pribadi”). Pada saat Anda membuat pemesanan dan atau akun pribadi pada website dhitravel.com, maka Kami akan mencatat dan menyimpan informasi dan data pribadi Anda. Dimana pada prinsipnya, setiap data yang Anda berikan dari waktu ke waktu akan Kami simpan dan Kami gunakan untuk kepentingan penyediaan produk dan layanan Kami kepada Anda, yaitu antara lain untuk keperluan tokenisasi, akuntansi, tagihan, audit, verifikasi kredit atau pembayaran, newsletter, serta keperluan keamanan, administrasi dan hukum, bonus poin atau bentuk sejenisnya, pengujian, pemeliharaan dan pengembangan sistem, hubungan pelanggan, promosi dan membantu Kami di kemudian hari dalam memberikan pelayanan kepada Anda. Sehubungan dengan itu, Kami dapat mengungkapkan data Anda kepada grup perusahaan dimana dhitravel.com bergabung didalamnya, mitra penyedia produk, perusahaan lain yang tercatat sebagai rekanan dari dhitravel.com, perusahaan yang ditunjuk untuk melakukan proses data yang terikat kontrak dengan Kami, agen perjalanan, badan pemerintah dan badan peradilan yang berwenang di jurisdiksi manapun. Oleh karena pentingnya aturan privasi ini dan ketentuan lainnya dalam penggunaan website Kami, maka untuk menjaga keamanan data pribadi Anda, maka mohon untuk dibaca secara seksama seluruh ketentuan dalam aturan privasi ini dan ketentuan lainnya dalam website Kami.</p>
<p style="margin-bottom: 50px;">
  <h4>Informasi yang dapat kami gunakan</h4>
Pada saat Anda mengakses website dan atau layanan online yang Kami sediakan, maka semua informasi dan data pribadi Anda akan Kami kumpulkan dengan ketentuan sebagai berikut :
<p>
a. Kami akan mengumpulkan informasi mengenai komputer atau pun media apapun yang Anda gunakan, termasuk IP address, sistem operasi, browser yang digunakan, URL, halaman, lokasi geografis dan waktu akses serta data lainnya terkait dengan penggunaan komputer Anda (“Detail IP”).
</p>
<p>
b. Kami akan meminta Anda untuk mengisi data-data pribadi Anda secara benar, jelas, lengkap, akurat dan tidak menyesatkan, seperti nama, alamat email, nomor telepon, alamat lengkap, informasi yang digunakan untuk pembayaran, informasi kartu kredit (nomor kartu kredit dan masa berlaku kartu kredit) dan data-data lain yang Kami perlukan guna melakukan transaksi melalui website dan layanan online lainnya yang Kami sediakan agar Anda dapat memanfaatkan layanan yang Anda butuhkan. Kami tidak bertanggung jawab atas segala kerugian yang mungkin terjadi karena informasi dan atau data yang tidak benar, jelas, lengkap, akurat dan menyesatkan yang Anda berikan;
</p>
<p>
c. Kami dapat menggunakan data pribadi Anda dan informasi lainnya yang dikumpulkan dengan tujuan pemasaran Media Sosial menggunakan tehnik grafik langsung dan terbuka dan untuk tujuan pemasaran digital konvensional, seperti mengirimkan Anda newsletter secara otomatis melalui surat elektronik untuk memberitahukan informasi produk baru, penawaran khusus atau informasi lainnya yang menurut Kami akan menarik bagi Anda.
</p>
<p>
d. Dalam menggunakan layanan Kami, informasi-informasi yang Anda berikan dapat Kami gunakan dan berikan kepada pihak ketiga yang bekerjasama dengan Kami, sejauh untuk kepentingan transaksi dan penggunaan layanan Kami
</p>
<p>
e. Segala informasi yang Kami terima dapat Kami gunakan untuk melindungi diri Kami terhadap segala tuntutan dan hukum yang berlaku terkait dengan penggunaan layanan dan pelanggaran yang Anda lakukan pada website Kami atas segala ketentuan sebagaimana diatur dalam persyaratan layanan dhitravel.com dan pedoman penggunaan produk dan layanan Kami, termasuk dan tidak terbatas apabila dibutuhkan atas perintah Pengadilan dalam proses hukum;
</p>
<p>
f. Anda bertanggung jawab atas kerahasiaan informasi dan data pribadi Anda, termasuk bertanggung jawab atas semua akses dan penggunaan website yang menggunakan kata sandi dan akun serta token yang Anda miliki yang digunakan oleh siapa saja, baik atas seijin maupun tidak seijin Anda. Demi keamanan data rahasia Anda, Kami sangat menyarankan agar Anda menyimpan akun dan kata sandi yang Anda miliki dengan sebaik-baiknya dan atau melakukan perubahan kata sandi secara berkala. Setiap penggunaan yang tidak sah dan tanpa sepengetahuan dan izin Anda menjadi tanggung jawab Anda sendiri dan Kami tidak bertanggung-jawab atas segala kerugian yang ditimbulkan sebagai akibat dari kelalaian yang Anda lakukan.
</p>
<p>
g. Anda harus segera memberitahukan kepada Kami mengenai adanya penggunaan sandi atau akun tanpa izin Anda atau semua bentuk pelanggaran atau ancaman pelanggaran keamanan dalam website ini.
</p>
<p>
h. Anda berhak untuk merubah dan atau menghapus data alamat yang telah Anda berikan dan telah tersimpan dalam sistem Kami dengan cara menghubungi Customer Service kami.
</p>
<p style="margin-bottom: 50px;">
  <h4>Penggunaan website</h4>
   Dengan menerima Ketentuan Penggunaan website ini, maka Anda telah diberikan keleluasaan dan atau otoritas akses yang terbatas dan dapat dibatalkan, tidak dapat dipindah-tangankan dan lisensi non-eksklusif untuk mengakses dan menggunakan website dengan menampilkan pada tampilan browser Anda untuk tujuan transaksi jual beli produk-produk Kami. Dalam penggunaan website, Anda akan diberi kata sandi dan akun yang unik untuk memungkinkan Anda mengakses bagian-bagian tertentu dari website ini. Setiap kali Anda menggunakan kata sandi atau akun tersebut, Anda akan dianggap memiliki otorisasi untuk mengakses dan menggunakan website ini dengan cara yang sesuai dengan syarat dan ketentuan Syarat Penggunaan ini dan Kami tidak memiliki kewajiban untuk menyelidiki otorisasi atau sumber dari akses tersebut atau penggunaan website. Dengan demikian, Anda setuju bahwa Anda senantiasa memperhatikan ketentuan larangan yang berlaku dalam penggunaan website ini, yaitu sebagai berikut :
<p>
        Anda dilarang untuk melakukan serta tidak akan membantu orang lain untuk mereproduksi, mendistribusikan, menampilkan, menjual, menyewakan, mengirimkan, membuat karya turunan dari, menerjemahkan, memodifikasi, merekayasa balik, membongkar, menguraikan atau mengeksploitasi website ini atau sebagian dari itu.
</p>
        Anda dilarang untuk menjual dan memindah-tangankan akun Anda, profil, atau item yang terkait dengan Layanan kecuali secara tegas diizinkan secara tertulis oleh Kami.
<p>
        Anda dilarang untuk menggunakan setiap informasi yang diberikan pada website atau membuat penggunaan website untuk kepentingan komersial dan atau bisnis lain, kecuali secara tegas diizinkan secara tertulis oleh Kami.
</p>
        Anda dilarang untuk meniru atau menggambarkan diri Anda dengan orang lain atau badan usaha lain pada saat Anda memberikan data dan informasi Anda kepada Kami dalam penggunaan website dan layanan Kami.
<p>
        Anda dilarang untuk mengirimkan iklan, materi promosi, email spam, serta merusak operasi layanan dengan cara mengupload virus, worm atau kode berbahaya lainnya.
</p>
        Anda dilarang untuk melakukan serta tidak akan membantu orang lain untuk mengasosiasikan, mencitrakan, mengaitkan, menghubungkan, mengafiliasikan dengan suatu website yang berisi konten-konten sebagai berikut :
<p>
        a. Konten yang melanggar hak kekayaan intelektual dan hak kepemilikan lainnya.
</p>
        b. Konten yang mengandung unsur pronografi atau cabul atau kesusilaan, perjudian, penghinaan, fitnah dan atau pencemaran nama baik, pemerasan dan atau pengancaman, penipuan, pemalsuan.
<p>
        c. Konten yang menimbulkan dan atau mendorong timbulnya atau memfasilitasi rasa kebencian, permusuhan, pengancaman, penghasutan, pelecehan dan mengobarkan suatu ketegangan antar perorangan, pihak manapun atau kelompok tertentu, baik berdasarkan suku, agama, ras dan antar golongan (SARA) ataupun gender atau orientasi seksual, asal negara, etnis, kebangsaan, keterbatasan fisik dan keyakinan.
</p>
        d. Konten-konten terlarang lainnya berdasarkan peraturan perundang-undangan yang berlaku.
<p>
Atas dasar kebijaksanaan Kami dalam hal setiap perilaku Anda selaku pelanggan termasuk dan atau dianggap melanggar hukum dan ketentuan yang berlaku serta merupakan pelanggaran Persyaratan Penggunaan, atau berbahaya bagi kepentingan Kami, maka atas setiap pelanggaran yang terjadi tersebut mengakibatkan pencabutan secara serta merta ijin akses yang diberikan dalam ketentuan ini tanpa pemberitahuan terlebih dahulu kepada Anda dan Kami berhak untuk menolak layanan, menghentikan akun, dan atau membatalkan pesanan yang Anda lakukan, termasuk dan tidak terbatas untuk mengungkapkan identitas dalam database Anda kepada pihak yang berwenang atas dasar suatu surat perintah yang sah. Anda harus bertanggung-jawab terhadap semua kerugian yang Kami maupun afiliasi dan mitra atau rekanan Kami alami, termasuk dan tidak terbatas terhadap klaim pihak ketiga, beserta biaya-biaya lainnya yang mungkin muncul sebagai akibat yang ditimbulkan dari perilaku Anda. Konten yang disediakan di website ini adalah semata-mata untuk tujuan informasi. Dengan Anda menyetujui ketentuan ini, maka sekaligus membebaskan Kami dari tanggung jawab atas setiap klaim, sanggahan, kerusakan, atau kerugian yang diakibatkan dari penggunaan website atau layanan yang terkandung di dalamnya
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
