<?php
require_once "../../../_config/config.php";
require "../../../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$username = trim(mysqli_real_escape_string($con, $_POST['username']));
	$password = trim(mysqli_real_escape_string($con, $_POST['password']));
	$nama_penumpang = trim(mysqli_real_escape_string($con, $_POST['nama_penumpang']));
	$alamat_penumpang = trim(mysqli_real_escape_string($con, $_POST['alamat_penumpang']));
	$tanggal_lahir = trim(mysqli_real_escape_string($con, $_POST['tanggal_lahir']));
	$jenis_kelamin = trim(mysqli_real_escape_string($con, $_POST['jenis_kelamin']));
	$telephone = trim(mysqli_real_escape_string($con, $_POST['telephone']));
	$sql_cek_identitas = mysqli_query($con, "SELECT * FROM tb_penumpang WHERE username = '$username' ") or die (mysqli_error($con));
	if(mysqli_num_rows($sql_cek_identitas) > 0) {
		echo "<script>alert('Username sudah pernah di pakai!'); window.location='daftar-user.php';</script>";
	} else {
		mysqli_query($con, "INSERT INTO tb_penumpang (id_penumpang, username, password, nama_penumpang, alamat_penumpang, tanggal_lahir, jenis_kelamin, telephone) VALUES ('$uuid', '$username', '$password', '$nama_penumpang', '$alamat_penumpang', '$tanggal_lahir', '$jenis_kelamin', '$telephone')") or die (mysqli_error($con));
		echo "<script>alert('Akun berhasil di daftarkan, Silahkan login!'); window.location='../login-user.php';</script>";
	}
} else if(isset($_POST['edit'])) {
	$id = $_POST['id'];
	$username = trim(mysqli_real_escape_string($con, $_POST['username']));
	$password = trim(mysqli_real_escape_string($con, $_POST['password']));
	$nama_penumpang = trim(mysqli_real_escape_string($con, $_POST['nama_penumpang']));
	$alamat_penumpang = trim(mysqli_real_escape_string($con, $_POST['alamat_penumpang']));
	$tanggal_lahir = trim(mysqli_real_escape_string($con, $_POST['tanggal_lahir']));
	$jenis_kelamin = trim(mysqli_real_escape_string($con, $_POST['jenis_kelamin']));
	$telephone = trim(mysqli_real_escape_string($con, $_POST['telephone']));
	mysqli_query($con, "UPDATE tb_penumpang SET username = '$username', password = '$password', nama_penumpang = '$nama_penumpang', alamat_penumpang = '$alamat_penumpang', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', telephone = '$telephone' WHERE id_penumpang = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
}
?>