<?php
require_once "../_config/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dhitravel Tiket</title>
</head>
<body onload="window.print()">
	<center><h1>E - TIKET</h1></center>
	<table width="80%" align="center" border="0" cellpadding="10" style="border-radius: 10px;">
		<tr style="background-color: #95a5a6; ">
			<th>Kode Pemesanan</th>
			<th>Kode Kursi</th>
			<th>Tanggal Pemesanan</th>
			<th>Tanggal Berangkat</th>
			<th>Nama Transportasi</th>
			<th>Total Bayar</th>
			<th>Atas Nama</th>
		</tr>
		<tr style="background: #ecf0f1; ">
			<?php
            $sql = "SELECT * FROM tb_pemesanan INNER JOIN tb_rute ON tb_rute.id_rute = tb_pemesanan.id_rute INNER JOIN tb_transportasi ON tb_transportasi.id_transportasi = tb_rute.id_transportasi INNER JOIN tb_penumpang ON tb_penumpang.id_penumpang = tb_pemesanan.id_pelanggan WHERE id_pelanggan='$_SESSION[id_penumpang]' AND id_pemesanan='$_GET[id_pemesanan]'";
            $query = $sql;
        	$sql_pemesanan = mysqli_query($con, $query) or die (mysqli_error($con));
        	$data = mysqli_fetch_object($sql_pemesanan);
        	?>
        	<td><center><?= $data->kode_pemesanan; ?></center></td>
			<td><center><?= $data->kode_kursi; ?></center></td>
			<td><center><?= $data->tanggal_pemesanan; ?></center></td>
			<td><center><?= $data->tanggal_berangkat; ?></center></td>
			<td><center><?= $data->nama_transportasi; ?></center></td>
			<td><center><?= $data->total_bayar; ?></center></td>
			<td><center><?= $data->nama_penumpang; ?></center></td>
		</tr>
	</table>
</body>
</html>