<?php include_once('../../_header.php'); ?>

<div class="box">
	<h1>Type Transportasi</h1>
	<hr>
	<h4>
		<small>Edit Data Type Transportasi</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
			$id = @$_GET['id'];
			$sql_type_transportasi = mysqli_query($con, "SELECT * FROM tb_type_transportasi WHERE id_type_transportasi = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_type_transportasi);
			?>
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="kode">Nama Type :</label>
					<input type="hidden" name="id" value="<?=$data['id_type_transportasi']?>">
					<input type="text" name="nama type" id="nama_type" value="<?=$data['nama_type']?>" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan :</label>
					<textarea name="keterangan" id="keterangan" class="form-control" required><?=$data['keterangan']?></textarea>
				</div>
				<div class="form-group pull-right">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
				</div>
			</form>
		</div>
	</div>

<?php include_once('../../_footer.php'); ?>