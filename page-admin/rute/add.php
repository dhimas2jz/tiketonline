<?php include_once('../../_header.php'); ?>

<div class="box">
	<h1>Rute</h1>
	<hr>
	<h4>
		<small>Tambah Data Rute</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="tujuan">Tujuan :</label>
					<input type="text" name="tujuan" id="tujuan" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="rute awal">Rute Awal :</label>
					<input type="text" name="rute_awal" class="form-control" required>
				</div>	
				<div class="form-group">
					<label for="rute akhir">Rute Akhir :</label>
					<input type="text" name="rute_akhir" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="harga">Harga :</label>
					<input type="text" name="harga" class="form-control" required>
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
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
				</div>
			</form>
		</div>
	</div>

<?php include_once('../../_footer.php'); ?>