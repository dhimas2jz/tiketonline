<?php
require_once "../../../_config/config.php";

if(isset($_POST['kirim'])) {
	$email = trim(mysqli_real_escape_string($con, $_POST['email']));
		mysqli_query($con, "INSERT INTO tb_lupapassword (email) VALUES ('$email')") or die (mysqli_error($con));
		echo "<script>alert('Silahkan cek email anda, dan login kembali!'); window.location='../login-user.php';</script>";
	}
?>