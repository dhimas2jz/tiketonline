<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$id_rute = trim(mysqli_real_escape_string($con, $_POST['id_rute']));
	$data = mysqli_fetch_object(mysqli_query($con, "SELECT * FROM tb_rute WHERE id_rute = '$_POST[id_rute]'"));
	$kode_pemesanan = trim(mysqli_real_escape_string($con, $_POST['kode_pemesanan']));
	$tanggal_pemesanan = trim(mysqli_real_escape_string($con, $_POST['tanggal_pemesanan']));
	$kode_kursi = trim(mysqli_real_escape_string($con, $_POST['kode_kursi']));
	$tanggal_berangkat = trim(mysqli_real_escape_string($con, $_POST['tanggal_berangkat']));
	$jam_berangkat = trim(mysqli_real_escape_string($con, $_POST['jam_berangkat']));
	$total_bayar = $data->harga;
	$id_pelanggan = trim(mysqli_real_escape_string($con, $_POST['id_pelanggan']));
	mysqli_query($con, "INSERT INTO tb_pemesanan (id_pemesanan, kode_pemesanan, tanggal_pemesanan, id_pelanggan, kode_kursi, id_rute, tanggal_berangkat, jam_berangkat, total_bayar, verifikasi) VALUES ('$uuid', '$kode_pemesanan', '$tanggal_pemesanan', '$id_pelanggan', '$kode_kursi', '$id_rute', '$tanggal_berangkat', '$jam_berangkat', '$total_bayar', 'Belum Bayar')") or die (mysqli_error($con));
	echo "<script>window.location='confirm-payment.php?id_pemesanan=".$uuid."';</script>";
} else if(isset($_POST['payment'])) {
	$bukti_pembayaran = trim(mysqli_real_escape_string($con, $_POST['bukti_pembayaran']));
	mysqli_query($con, "INSERT INTO tb_pemesanan (bukti_pembayaran) VALUES ('$bukti_pembayaran')") or die (mysqli_error($con));
	//echo "<script>window.location='history-payment.php';</script>";
} else if (isset($_POST['bukti_pembayaran'])) {
	$tmp_bukti = $_FILES['bukti']['tmp_name'];
	$bukti = $_FILES['bukti']['name'];
	if ($bukti != '') {
		if (move_uploaded_file($tmp_bukti, "../_assets/img3/{$bukti}")) {
			mysqli_query($con, "UPDATE tb_pemesanan SET bukti_pembayaran='$bukti' WHERE id_pemesanan = '$_POST[id_pemesanan]'") or die (mysqli_error($con));
			echo "<script>
			alert('berhasil!');	
			window.location='history-payment.php';
			</script>";
		}
	}
}
?>