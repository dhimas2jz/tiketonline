<?php
require_once "../../_config/config.php";
require "../../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

if(isset($_POST['add'])) {
	$uuid = Uuid::uuid4()->toString();
	$username = trim(mysqli_real_escape_string($con, $_POST['username']));
	$password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
	$nama_pengurus = trim(mysqli_real_escape_string($con, $_POST['nama_pengurus']));
	mysqli_query($con, "INSERT INTO tb_pengurus (id_pengurus, username, password, nama_pengurus, level) VALUES ('$uuid', '$username', '$password', '$nama_pengurus','petugas')") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if(isset($_POST['edit'])) {
	$id = $_POST['id'];
	$username = trim(mysqli_real_escape_string($con, $_POST['username']));
	$password = sha1(trim(mysqli_real_escape_string($con, $_POST['password'])));
	$nama_pengurus = trim(mysqli_real_escape_string($con, $_POST['nama_pengurus']));
	mysqli_query($con, "UPDATE tb_pengurus SET username = '$username', password = '$password', nama_pengurus = '$nama_pengurus' WHERE id_pengurus = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
}
?>