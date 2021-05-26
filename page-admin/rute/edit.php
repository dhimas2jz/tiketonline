<?php include_once('../../_header.php'); ?>

<div class="box">
	<h1>Rute</h1>
	<hr>
	<h4>
		<small>Edit Data Rute</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
			$id = @$_GET['id'];
			$sql_rute = mysqli_query($con, "SELECT * FROM tb_rute WHERE id_rute = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_rute);
			?>
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="tujuan">Tujuan :</label>
					<input type="hidden" name="id" value="<?=$data['id_rute']?>">
					<input type="text" name="tujuan" id="tujuan" value="<?=$data['tujuan']?>" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="rute awal">Rute Awal :</label>
					<input type="text" name="rute_awal" value="<?=$data['rute_awal']?>" class="form-control" required>
				</div>	
				<div class="form-group">
					<label for="rute akhir">Rute Akhir :</label>
					<input type="text" name="rute_akhir" value="<?=$data['rute_akhir']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="harga">Harga :</label>
					<input type="text" name="harga" value="<?=$data['harga']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Transportasi :</label>
					<select name="id_transportasi" class="form-control" required>
						<option selected="" disabled="">- Pilih -</option>
						<?php
						$transportasi = mysqli_query($con, "SELECT * FROM tb_transportasi");
						while ($data = mysqli_fetch_object($transportasi)){
						?>
						<option value="<?= $data->id_transportasi; ?>"><?= $data->kode; ?> (<?= $data->keterangan; ?>)</option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group pull-right">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
				</div>
			</form>
		</div>
	</div>

<?php include_once('../../_footer.php'); ?>