<?php include_once('../../_header.php'); ?>

<div class="box">
	<h1>Transportasi</h1>
	<hr>
	<h4>
		<small>Tambah Data Transportasi</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="kode">Kode :</label>
					<input type="text" name="kode" id="kode" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="jumlah kursi">Jumlah Kursi :</label>
					<input type="text" name="jumlah_kursi" class="form-control" required>
				</div>	
				<div class="form-group">
					<label for="keterangan">Keterangan :</label>
					<textarea name="keterangan" id="keterangan" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label>Tipe Transportasi :</label>
					<select name="id_type_transportasi" class="form-control" required>
						<option selected="" disabled="">- Pilih -</option>
						<?php
						$tt = mysqli_query($con, "SELECT * FROM tb_type_transportasi");
						while ($data = mysqli_fetch_object($tt)){
						?>
						<option value="<?= $data->id_type_transportasi; ?>"><?= $data->nama_type; ?></option>
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