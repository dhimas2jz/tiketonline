<?php
require_once "../../_config/config.php";
require "../../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$nama_type = trim(mysqli_real_escape_string($con, $_POST['nama_type']));
	$keterangan = trim(mysqli_real_escape_string($con, $_POST['keterangan']));
	mysqli_query($con, "INSERT INTO tb_type_transportasi (id_type_transportasi, nama_type, keterangan) VALUES ('$uuid', '$nama_type', '$keterangan')") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if(isset($_POST['edit'])) {
	$id = $_POST['id'];
	$nama_type = trim(mysqli_real_escape_string($con, $_POST['nama_type']));
	$keterangan = trim(mysqli_real_escape_string($con, $_POST['keterangan']));
	mysqli_query($con, "UPDATE tb_type_transportasi SET nama_type = '$nama_type', keterangan = '$keterangan' WHERE id_type_transportasi = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
}
?>