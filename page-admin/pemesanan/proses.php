<?php
require_once "../../_config/config.php";
require "../../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$kode_pemesanan = trim(mysqli_real_escape_string($con, $_POST['kode_pemesanan']));
	$tanggal_pemesanan = trim(mysqli_real_escape_string($con, $_POST['tanggal_pemesanan']));
	$tempat_pemesanan = trim(mysqli_real_escape_string($con, $_POST['tempat_pemesanan']));
	$kode_kursi = trim(mysqli_real_escape_string($con, $_POST['kode_kursi']));
	$tujuan = trim(mysqli_real_escape_string($con, $_POST['tujuan']));
	$tanggal_berangkat = trim(mysqli_real_escape_string($con, $_POST['tanggal_berangkat']));
	$jam_berangkat = trim(mysqli_real_escape_string($con, $_POST['jam_berangkat']));
	$maskapai = trim(mysqli_real_escape_string($con, $_POST['maskapai']));
	$total_bayar = trim(mysqli_real_escape_string($con, $_POST['total_bayar']));
	$id_pelanggan = trim(mysqli_real_escape_string($con, $_POST['id_pelanggan']));
	$id_rute = trim(mysqli_real_escape_string($con, $_POST['id_rute']));
	$id_pengurus = trim(mysqli_real_escape_string($con, $_POST['id_pengurus']));
	mysqli_query($con, "INSERT INTO tb_pemesanan (id_pemesanan, kode_pemesanan, tanggal_pemesanan, tempat_pemesanan, id_pelanggan, kode_kursi, id_rute, tujuan, tanggal_berangkat, jam_berangkat, maskapai, total_bayar, id_pengurus) VALUES ('$uuid', '$kode_pemesanan', '$tanggal_pemesanan', '$tempat_pemesanan', '$id_pelanggan', '$kode_kursi', '$id_rute', '$tujuan', '$tanggal_berangkat', '$jam_berangkat', '$maskapai' '$total_bayar', '$id_pengurus')") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if(isset($_POST['edit'])) {
	$id = $_POST['id'];
	$kode_pemesanan = trim(mysqli_real_escape_string($con, $_POST['kode_pemesanan']));
	$tanggal_pemesanan = trim(mysqli_real_escape_string($con, $_POST['tanggal_pemesanan']));
	$tempat_pemesanan = trim(mysqli_real_escape_string($con, $_POST['tempat_pemesanan']));
	$kode_kursi = trim(mysqli_real_escape_string($con, $_POST['kode_kursi']));
	$tujuan = trim(mysqli_real_escape_string($con, $_POST['tujuan']));
	$tanggal_berangkat = trim(mysqli_real_escape_string($con, $_POST['tanggal_berangkat']));
	$jam_berangkat = trim(mysqli_real_escape_string($con, $_POST['jam_berangkat']));
	$maskapai = trim(mysqli_real_escape_string($con, $_POST['maskapai']));
	$total_bayar = trim(mysqli_real_escape_string($con, $_POST['total_bayar']));
	$id_pelanggan = trim(mysqli_real_escape_string($con, $_POST['id_pelanggan']));
	$id_rute = trim(mysqli_real_escape_string($con, $_POST['id_rute']));
	$id_pengurus = trim(mysqli_real_escape_string($con, $_POST['id_pengurus']));
	mysqli_query($con, "UPDATE tb_pemesanan SET kode_pemesanan = '$kode_pemesanan', tanggal_pemesanan = '$tanggal_pemesanan', tempat_pemesanan = '$tempat_pemesanan', kode_kursi = '$kode_kursi', tujuan = '$tujuan', tanggal_berangkat = '$tanggal_berangkat', jam_berangkat = '$jam_berangkat', maskapai = '$maskapai', total_bayar = '$total_bayar', id_pelanggan = '$id_pelanggan', id_rute = '$id_rute', id_pengurus = '$id_pengurus' WHERE id_pemesanan = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if(isset($_POST['verifikasi'])) {
	$id = $_POST['id'];
	$verifikasi = trim(mysqli_real_escape_string($con, $_POST['status']));
	mysqli_query($con, "UPDATE tb_pemesanan SET verifikasi = '$verifikasi' WHERE id_pemesanan = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
}
?>