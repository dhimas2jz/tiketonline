<?php include_once('../../_header.php'); ?>

	<div class="box">
		<h1>Pemesanan</h1>
		<hr>
		<h4>
			<small>Data pemesanan</small>
		</h4>
		<div style="margin-bottom: 20px;">
			<form class="form-inline" action="" method="post">
				<div class="form-group">
					<input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</div>
			</form>
		</div>
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th><center>No</center></th>
						<th><center>Kode Pemesanan</center></th>
						<th><center>Tanggal Pemesanan</center></th>
						<th><center>Kode Kursi</enter></th>
						<th><center>Tanggal Berangkat</center></th>
						<th><center>Jam Berangkat</center></th>
						<th><center>Total Bayar</center></th>
						<th><center>Status</center></th>
						<th><center>Verifikasi</center></th>
				</thead>
				<tbody>
				<?php
				$batas = 5;
				$hal = @$_GET['hal'];
				if(empty($hal)) {
					$posisi = 0;
					$hal = 1;
				} else {
					$posisi = ($hal - 1) * $batas;
				}
				$no = 1;
				if($_SERVER['REQUEST_METHOD'] == "POST") {
					$pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
					if($pencarian != '') {
						$sql = "SELECT * FROM tb_pemesanan WHERE kode_pemesanan LIKE '%$pencarian%'";
						$query = $sql;
						$queryJml = $sql;
					} else {
						$query = "SELECT * FROM tb_pemesanan LIMIT $posisi, $batas";
						$queryJml = "SELECT * FROM tb_pemesanan";
						$no = $posisi + 1;
					}
				} else {
					$query = "SELECT * FROM tb_pemesanan LIMIT $posisi, $batas";
					$queryJml = "SELECT * FROM tb_pemesanan";
					$no = $posisi + 1;
				}
				
				$sql_pemesanan = mysqli_query($con, $query) or die (mysqli_error($con));
				if(mysqli_num_rows($sql_pemesanan) > 0) {
					while($data = mysqli_fetch_array($sql_pemesanan)) { ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$data['kode_pemesanan']?></td>
							<td><?=$data['tanggal_pemesanan']?></td>
							<td><?=$data['kode_kursi']?></td>
							<td><?=$data['tanggal_berangkat']?></td>
							<td><?=$data['jam_berangkat']?></td>
							<td>Rp.<?= number_format($data['total_bayar'],2,',','.')?></td>
							<td><?=$data['verifikasi']?></td>
							<td class="text-center">
								<a href="verifikasi.php?id=<?=$data['id_pemesanan']?>&bukti_pembayaran=<?=$data['bukti_pembayaran']?>" class="btn btn-success"><i class="	glyphicon glyphicon-check"></i></a>
						</tr>
					<?php
					}
				} else {
					echo "<tr><td colspan=\"11\" align=\"center\">Data tidak ditemukan</td></tr>";
				}
				?>
				</tbody>
			</table>
		</div>
		<?php
		//if(isset($_POST['pencarian']))
		if(isset($_POST['pencarian'])) { ?>
			<div style="float:left;">
				<?php
				$jml = mysqli_num_rows(mysqli_query($con, $queryJml));
				echo "Data Hasil Pencarian : <b>$jml</b>";
		} else {
			echo "<div style=\"float:left;\">";
			$jml = mysqli_num_rows(mysqli_query($con, $queryJml));
			echo "Jumlah Data : <b>$jml</b>";
			echo "</div>";
		}
		?>
			</div>
			<div style="float:right;">
				<ul class="pagination pagination-sm" style="margin:0">
					<?php
					$jml_hal = ceil($jml / $batas);
					for ($i=1; $i <= $jml_hal; $i++) { 
						if($i != $hal) {
							echo "<li><a href=\"?hal=$i\">$i</a></li>";	
						} else {
							echo "<li class=\"active\"><a>$i</a></li>";
						}
					}
					?>
				</ul>
			</div>
	</div>

<?php include_once('../../_footer.php'); ?>