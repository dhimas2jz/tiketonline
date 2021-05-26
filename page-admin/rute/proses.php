<?php
require_once "../../_config/config.php";
require "../../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$tujuan = trim(mysqli_real_escape_string($con, $_POST['tujuan']));
	$rute_awal = trim(mysqli_real_escape_string($con, $_POST['rute_awal']));
	$rute_akhir = trim(mysqli_real_escape_string($con, $_POST['rute_akhir']));
	$harga = trim(mysqli_real_escape_string($con, $_POST['harga']));
	$id_transportasi = trim(mysqli_real_escape_string($con, $_POST['id_transportasi']));
	mysqli_query($con, "INSERT INTO tb_rute (id_rute, tujuan, rute_awal, rute_akhir, harga, id_transportasi) VALUES ('$uuid', '$tujuan', '$rute_awal', '$rute_akhir', '$harga', '$id_transportasi')") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if(isset($_POST['edit'])) {
	$id = $_POST['id'];
	$tujuan = trim(mysqli_real_escape_string($con, $_POST['tujuan']));
	$rute_awal = trim(mysqli_real_escape_string($con, $_POST['rute_awal']));
	$rute_akhir = trim(mysqli_real_escape_string($con, $_POST['rute_akhir']));
	$harga = trim(mysqli_real_escape_string($con, $_POST['harga']));
	$id_transportasi = trim(mysqli_real_escape_string($con, $_POST['id_transportasi']));
	mysqli_query($con, "UPDATE tb_rute SET tujuan = '$tujuan', rute_awal = '$rute_awal', rute_akhir = '$rute_akhir', harga = '$harga', id_transportasi = '$id_transportasi' WHERE id_rute = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
}
?>