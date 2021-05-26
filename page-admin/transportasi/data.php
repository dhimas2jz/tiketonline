<?php include_once('../../_header.php'); ?>

	<div class="box">
		<h1>Transportasi</h1>
		<hr>
		<h4>
			<small>Data Transportasi</small>
		</h4>
			<div class="pull-right">
				<a href="" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i></a>
				<a href="add.php" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Tambah Transportasi </a>
			</div>
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
						<th><center>Kode</center></th>
						<th><center>Jumlah Kursi</center></th>
						<th><center>Keterangan</center></th>
						<th><center>Edit</center></th>
						<th><center>Delete</center></th>
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
						$sql = "SELECT * FROM tb_transportasi WHERE kode LIKE '%$pencarian%'";
						$query = $sql;
						$queryJml = $sql;
					} else {
						$query = "SELECT * FROM tb_transportasi LIMIT $posisi, $batas";
						$queryJml = "SELECT * FROM tb_transportasi";
						$no = $posisi + 1;
					}
				} else {
					$query = "SELECT * FROM tb_transportasi LIMIT $posisi, $batas";
					$queryJml = "SELECT * FROM tb_transportasi";
					$no = $posisi + 1;
				}
				
				$sql_transportasi = mysqli_query($con, $query) or die (mysqli_error($con));
				if(mysqli_num_rows($sql_transportasi) > 0) {
					while($data = mysqli_fetch_array($sql_transportasi)) { ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$data['kode']?></td>
							<td><?=$data['jumlah_kursi']?></td>
							<td><?=$data['keterangan']?></td>
							<td class="text-center">
								<a href="edit.php?id=<?=$data['id_transportasi']?>" class="btn btn-warning"><i class="	glyphicon glyphicon-edit"></i></a>
							<td class="text-center">
								<a href="delete.php?id=<?=$data['id_transportasi']?>" onclick="return confirm('Apakah anda yakin akan menghapus data?')" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>

						</tr>
					<?php
					}
				} else {
					echo "<tr><td colspan=\"10\" align=\"center\">Data tidak ditemukan</td></tr>";
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