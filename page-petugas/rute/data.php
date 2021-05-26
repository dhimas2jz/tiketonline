<?php include_once('../../_header.php'); ?>

	<div class="box">
		<h1>Rute</h1>
		<hr>
		<h4>
			<small>Data Rute</small>
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
						<th><center>Tujuan</center></th>
						<th><center>Rute Awal</center></th>
						<th><center>Rute Akhir</center></th>
						<th><center>Harga</center></th>
					</tr>
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
						$sql = "SELECT * FROM tb_rute WHERE tujuan LIKE '%$pencarian%'";
						$query = $sql;
						$queryJml = $sql;
					} else {
						$query = "SELECT * FROM tb_rute LIMIT $posisi, $batas";
						$queryJml = "SELECT * FROM tb_rute";
						$no = $posisi + 1;
					}
				} else {
					$query = "SELECT * FROM tb_rute LIMIT $posisi, $batas";
					$queryJml = "SELECT * FROM tb_rute";
					$no = $posisi + 1;
				}
				
				$sql_rute = mysqli_query($con, $query) or die (mysqli_error($con));
				if(mysqli_num_rows($sql_rute) > 0) {
					while($data = mysqli_fetch_array($sql_rute)) { ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$data['tujuan']?></td>
							<td><?=$data['rute_awal']?></td>
							<td><?=$data['rute_akhir']?></td>
							<td>Rp.<?= number_format($data['harga'],2,',','.')?></td>
						</tr>
					<?php
					}
				} else {
					echo "<tr><td colspan=\"7\" align=\"center\">Data tidak ditemukan</td></tr>";
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