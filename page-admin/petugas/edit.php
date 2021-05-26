<?php include_once('../../_header.php'); ?>

<div class="box">
	<h1>Petugas</h1>
	<hr>
	<h4>
		<small>Edit Data Petugas</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
			$id = @$_GET['id'];
			$sql_pengurus = mysqli_query($con, "SELECT * FROM tb_pengurus WHERE id_pengurus = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_pengurus);
			?>
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="kode">Username :</label>
					<input type="hidden" name="id" value="<?=$data['id_pengurus']?>">
					<input type="text" name="username" id="nama_type" value="<?=$data['username']?>" class="form-control" required autofocus>
				</div>	
				<div class="form-group">
					<label for="keterangan">Password :</label>
					<input type="text" name="password" value="<?=$data['password']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="keterangan">Nama Petugas :</label>
					<input type="text" name="nama_pengurus" value="<?=$data['nama_pengurus']?>" class="form-control" required>
				</div>
				<div class="form-group pull-right">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
				</div>
			</form>
		</div>
	</div>

<?php include_once('../../_footer.php'); ?>