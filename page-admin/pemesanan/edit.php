<?php include_once('../../_header.php'); ?>

<div class="box">
	<h1>Pemesanan</h1>
	<hr>
	<h4>
		<small>Tambah Data Pemesanan</small>
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning"><i class="glyphicon glyphicon-chevron-left"></i> Kembali </a>
		</div>
	</h4>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<?php
			$id = @$_GET['id'];
			$sql_pemesanan = mysqli_query($con, "SELECT * FROM tb_pemesanan WHERE id_pemesanan = '$id'") or die (mysqli_error($con));
			$data = mysqli_fetch_array($sql_pemesanan);
			?>
			<form action="proses.php" method="post">
				<input type="hidden" name="id" value="<?=$id?>">
				<div class="form-group">
					<?php 
			          $sql = mysqli_query($con, "SELECT * from tb_pemesanan");
			          $num = mysqli_num_rows($sql);
			          if($num <> 0)
			          {
			            $kode = $num + 1;
			          }else{
			            $kode = 1;
			          }
			          //mulai bikin kode
			            $tgl = date('dmY');
			            $bikin_kode = str_pad($kode, 3, "0", STR_PAD_LEFT);
			            $tahun = date('Ym');
			            $kode_kereta = "KRT{$tgl}{$bikin_kode}";
			            $kode_pesawat = "PSW{$tgl}{$bikin_kode}";
			      ?>
					<label for="kode pemesanan">Kode Pemesanan :</label>
					<!-- <input type="text" name="kode_pemesanan" id="kode_pemesanan" value="<?= $kode_jadi ?>" readonly class="form-control" required> -->
					<select name="kode_pemesanan" class="form-control">
						<option selected="" disabled="">- Pilih -</option>
						<option value="<?php echo $kode_kereta ?>"><?php echo $kode_kereta ?></option>
						<option value="<?php echo $kode_pesawat ?>"><?php echo $kode_pesawat ?></option>
					</select>
				</div>
				<div class="form-group">
					<label for="tanggal pemesanan">Tanggal Pemesanan :</label>
					<input type="date" name="tanggal_pemesanan" value="<?=$data['tanggal_pemesanan']?>" class="form-control" required>
				</div>	
				<div class="form-group">
					<label for="kode kursi">Kode Kursi :</label>
					<input type="text" name="kode_kursi" value="<?=$data['kode_kursi']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="tanggal_berangkat">Tanggal Berangkat :</label>
					<input type="date" name="tanggal_berangkat" value="<?=$data['tanggal_berangkat']?>" class="form-control" required>
            	</div>
            	<div class="form-group">
					<label for="jam berangkat">Jam Berangkat :</label>
					<input type="time" name="jam_berangkat" value="<?=$data['jam_berangkat']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Total Bayar :</label>
					<input type="text" name="total_bayar" value="<?=$data['total_bayar']?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Pelanggan :</label>
					<select name="id_pelanggan" class="form-control" required>
						<option selected="" disabled="">- Pilih -</option>
						<?php
						$penumpang = mysqli_query($con, "SELECT * FROM tb_penumpang");
						while ($data = mysqli_fetch_object($penumpang)){
						?>
						<option value="<?= $data->id_penumpang; ?>"><?= $data->nama_penumpang; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label>Rute :</label>
					<select name="id_rute" class="form-control" required>
						<option selected="" disabled="">- Pilih -</option>
						<?php
						$rute = mysqli_query($con, "SELECT * FROM tb_rute");
						while ($data = mysqli_fetch_object($rute)){
						?>
						<option value="<?= $data->id_rute; ?>"><?= $data->rute_awal; ?> - <?= $data->rute_akhir; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label>Pengurus :</label>
					<select name="id_pengurus" class="form-control" required>
						<option selected="" disabled="">- Pilih -</option>
						<?php
						$pengurus = mysqli_query($con, "SELECT * FROM tb_pengurus");
						while ($data = mysqli_fetch_object($pengurus)){
						?>
						<option value="<?= $data->id_pengurus; ?>"><?= $data->nama_pengurus; ?></option>
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