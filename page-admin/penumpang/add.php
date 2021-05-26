<?php include_once('../../_header.php'); ?>

<div class="box">
	<h1>Penumpang</h1>
	<hr>
	<h4>
		<small>Tambah Data Penumpang</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="proses.php" method="post">
				<div class="form-group">
					<label for="username">Email :</label>
					<input type="text" name="email" id="email" class="form-control" required autofocus>
				</div>
				<div class="form-group">
					<label for="username">Username :</label>
					<input type="text" name="username" id="username" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password :</label>
					<input type="text" name="password" class="form-control" required>
				</div>	
				<div class="form-group">
					<label for="nama penumpang">Nama Penumpang :</label>
					<input type="text" name="nama_penumpang" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="alamat penumpang">Alamat Penumpang :</label>
					<textarea name="alamat_penumpang" id="alamat_penumpang" class="form-control" required></textarea>
				</div>
				<div class="form-group">
					<label for="tanggal lahir">Tanggal Lahir :</label>
					<input type="date" name="tanggal_lahir" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="jenis_kelamin">Jenis Kelamin :</label>
            		<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            		<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
            	</div>
            	<div class="form-group">
				<label for="telephone">No Telephone :</label>
				<input type="text" name="telephone" class="form-control" required>
				</div>
				<div class="form-group pull-right">
					<input type="submit" name="add" value="Simpan" class="btn btn-success">
				</div>
				</div>
			</form>
		</div>
	</div>

<?php include_once('../../_footer.php'); ?>