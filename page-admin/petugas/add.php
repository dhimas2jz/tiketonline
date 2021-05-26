<?php include_once('../../_header.php'); ?>

<div class="box">
	<h1>Petugas</h1>
	<hr>
	<h4>
		<small>Tambah Data Petugas</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="username">Username :</label>
					<input type="text" name="username" id="username" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="password">Password :</label>
					<input type="text" name="password" id="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="nama pengurus">Nama Petugas :</label>
					<input type="text" name="nama_pengurus" id="nama_pengurus" class="form-control" required>
				</div>
				<div class="form-group pull-right">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
				</div>
			</form>
		</div>
	</div>

<?php include_once('../../_footer.php'); ?>