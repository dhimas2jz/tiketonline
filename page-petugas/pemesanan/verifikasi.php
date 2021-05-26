<?php include_once('../../_header.php'); ?>

<div class="box">
	<h1>Pemesanan</h1>
	<hr>
	<h4>
		<small>Verifikasi Data Pemesanan</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
		</div>
	</h4>
	<form action="proses.php" method="post">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<?php
				$id = @$_GET['id'];
				?>
			<input type="hidden" name="id" value="<?=$id; ?>">
			<label for="verifikasi">Verifikasi Status Bayar :</label>
				<div class="form-group">
					<select name="status" class="form-control">
						<option value="Belum Bayar">Belum Bayar</option>
						<option value="Sudah Bayar">Sudah Bayar</option>
					</select>
				</div>
				<center>
			        	<a href="../../_assets/img3/<?php echo $_GET['bukti_pembayaran']; ?>"><img width="300px" src="../../_assets/img3/<?php echo $_GET['bukti_pembayaran']; ?>" border="0"/></a> 
			        </center>
		<div class="form-group pull-right">
			<input type="submit" name="verifikasi" value="Simpan" class="btn btn-success">
		</div>
	</form>
</div>

<?php include_once('../../_footer.php'); ?>