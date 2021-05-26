<?php include_once('../../_header.php'); ?>

<div class="box">
	<h1>Type Transportasi</h1>
	<hr>
	<h4>
		<small>Tambah Data Type Transportasi</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="kode">Nama Type :</label>
					<input type="text" name="nama type" id="nama_type" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan :</label>
					<textarea name="keterangan" id="keterangan" class="form-control" required></textarea>
				</div>
				<div class="form-group pull-right">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
				</div>
			</form>
		</div>
	</div>

<?php include_once('../../_footer.php'); ?>