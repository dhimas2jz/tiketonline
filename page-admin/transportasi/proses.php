<?php
require_once "../../_config/config.php";
require "../../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$kode = trim(mysqli_real_escape_string($con, $_POST['kode']));
	$jumlah_kursi = trim(mysqli_real_escape_string($con, $_POST['jumlah_kursi']));
	$keterangan = trim(mysqli_real_escape_string($con, $_POST['keterangan']));
	$id_type_transportasi = trim(mysqli_real_escape_string($con, $_POST['id_type_transportasi']));
	mysqli_query($con, "INSERT INTO tb_transportasi (id_transportasi, kode, jumlah_kursi, keterangan, id_type_transportasi) VALUES ('$uuid', '$kode', '$jumlah_kursi', '$keterangan', '$id_type_transportasi')") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if(isset($_POST['edit'])) {
	$id = $_POST['id'];
	$kode = trim(mysqli_real_escape_string($con, $_POST['kode']));
	$jumlah_kursi = trim(mysqli_real_escape_string($con, $_POST['jumlah_kursi']));
	$keterangan = trim(mysqli_real_escape_string($con, $_POST['keterangan']));
	$id_type_transportasi = trim(mysqli_real_escape_string($con, $_POST['id_type_transportasi']));
	mysqli_query($con, "UPDATE tb_transportasi SET kode = '$kode', jumlah_kursi = '$jumlah_kursi', keterangan = '$keterangan', id_type_transportasi = '$id_type_transportasi' WHERE id_transportasi = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
}
?>