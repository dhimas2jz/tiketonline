<?php include_once('../../_header.php'); ?>

<div class="box">
	<h1>Penumpang</h1>
	<hr>
	<h4>
		<small>Edit Data Penumpang</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
			$id = @$_GET['id'];
			$sql_penumpang = mysqli_query($con, "SELECT * FROM tb_penumpang WHERE id_penumpang = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_penumpang);
			?>
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="email">Email :</label>
					<input type="hidden" name="email" value="<?=$data['email']?>">
					<input type="text" name="email" id="email" value="<?=$data['email']?>" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="username">Username :</label>
					<input type="hidden" name="id" value="<?=$data['id_penumpang']?>">
					<input type="text" name="username" id="username" value="<?=$data['username']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password :</label>
					<input type="text" name="password" value="<?=$data['password']?>" class="form-control" required>
				</div>	
				<div class="form-group">
					<label for="nama penumpang">Nama Penumpang :</label>
					<input type="text" name="nama_penumpang" value="<?=$data['nama_penumpang']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="alamat penumpang">Alamat Penumpang :</label>
					<textarea name="alamat_penumpang" id="alamat_penumpang" class="form-control" required><?=$data['alamat_penumpang']?></textarea>
				</div>
				<div class="form-group">
					<label for="tanggal lahir">Tanggal Lahir :</label>
					<input type="date" name="tanggal_lahir" value="<?=$data['tanggal_lahir']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="jenis_kelamin">Jenis Kelamin :</label>
            		<label><input type="radio" name="jenis_kelamin" value="laki-laki"<?= $data['jenis_kelamin'] == 'Laki-Laki' ? ' checked' : ''; ?>> Laki-laki</label>
            		<label><input type="radio" name="jenis_kelamin" value="perempuan"<?= $data['jenis_kelamin'] == 'Perempuan' ? ' checked' : ''; ?>> Perempuan</label>
            	</div>
            	<div class="form-group">
				<label for="telephone">No Telephone :</label>
				<input type="text" name="telephone" value="<?=$data['telephone']?>" class="form-control" required>
				</div>
				<div class="form-group pull-right">
					<input type="submit" name="edit" value="Simpan" class="btn btn-success">
				</div>
				</div>
			</form>
		</div>
	</div>

<?php include_once('../../_footer.php'); ?>