<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
$tampil_nik = "SELECT * FROM data_user WHERE nik=$_SESSION[nik]";
$query = mysqli_query($konek, $tampil_nik);
$data = mysqli_fetch_array($query, MYSQLI_BOTH);
$nik = $data['nik'];
$nama = $data['nama'];
$agama = $data['agama'];
?>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<div class="card-title">FORM TAMBAH PENCATATAN PERKAWINAN</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>NIK - Nama Pemohon</label>
									<input type="text" name="keterangan" class="form-control" value="<?= $nik . ' - ' . $nama; ?>" readonly>
								</div>
								<div class="form-group">
									<input type="hidden" name="nik" class="form-control" value="<?= $nik; ?>" readonly>
								</div>
								<!-- <div class="form-group">
													<label>Tanggal Request</label>
													<input type="date" name="tgl" class="form-control" value="<?= $s2; ?>" readonly>
												</div> -->
								<!-- <div class="form-group">
													<label>Tanggal Request</label>
													<input type="date" name="tgl" class="form-control" value=<?= $date; ?> required>
												</div> -->
								<div class="form-group">
									<label>Agama</label>
									<input type="text" name="keterangan" class="form-control" value="<?= $agama; ?>" readonly required>
								</div>
								<div class="form-group">
									<label>NIK Suami</label>
									<input type="text" name="niksuami" class="form-control" placeholder="NIK SUAMI" onkeyup="this.value = this.value.toUpperCase()" autofocus required>
								</div>
								<div class="form-group">
									<label>NIK Istri</label>
									<input type="text" name="nikistri" class="form-control" placeholder="NIK ISTRI" onkeyup="this.value = this.value.toUpperCase()" autofocus required>
								</div>
								<div class="form-group">
									<label>Nama Suami</label>
									<input type="text" name="namasuami" class="form-control" placeholder="NAMA SUAMI" onkeyup="this.value = this.value.toUpperCase()" autofocus required>
								</div>
								<div class="form-group">
									<label>Nama Istri</label>
									<input type="text" name="namaistri" class="form-control" placeholder="NAMA ISTRI" onkeyup="this.value = this.value.toUpperCase()" autofocus required>
								</div>
								<div class="form-group">
									<label>Tempat Menikah</label>
									<input type="text" name="tempat" class="form-control" placeholder="TEMPAT MENIKAH" onkeyup="this.value = this.value.toUpperCase()" autofocus required>
								</div>
								<div class="form-group">
									<label>Tanggal Menikah</label>
									<input type="date" name="tanggal" class="form-control" placeholder="TEMPAT MENIKAH" onkeyup="this.value = this.value.toUpperCase()" autofocus required>
								</div>

								<div class="form-group">
									<label>Nama Pemuka Agama</label>
									<input type="text" name="nama_pemuka_agama" class="form-control" placeholder="NAMA PEMUKA AGAMA" onkeyup="this.value = this.value.toUpperCase()" autofocus>
								</div>

							</div>
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>Surat Nikah</label>
									<input type="file" name="suratnikah" class="form-control" size="37">
								</div>
								<div class="form-group">
									<label>KTP Suami</label>
									<input type="file" name="ktpsuami" class="form-control" size="37">
								</div>
								<div class="form-group">
									<label>Kartu Keluarga Suami</label>
									<input type="file" name="kksuami" class="form-control" size="37">
								</div>
								<div class="form-group">
									<label>Akta Kelahiran Suami</label>
									<input type="file" name="aktasuami" class="form-control" size="37">
								</div>
								<div class="form-group">
									<label>KTP Istri</label>
									<input type="file" name="ktpistri" class="form-control" size="37">
								</div>
								<div class="form-group">
									<label>Kartu Keluarga Istri</label>
									<input type="file" name="kkistri" class="form-control" size="37">
								</div>

								<div class="form-group">
									<label>Akta Kelahiran Istri</label>
									<input type="file" name="aktaistri" class="form-control" size="37" required>
								</div>





							</div>
						</div>
					</div>
					<div class="card-action">
						<button type="submit" name="kirim" value="Upload" class="btn btn-success">Kirim</button>
						<a href="?halaman=beranda" class="btn btn-default">Batal</a>
					</div>
				</div>
		</div>
		</form>
	</div>
</div>

<?php
if (isset($_POST['kirim'])) {
	$nik = $_POST['nik'];
	$niksuami = $_POST['niksuami'];
	$nikistri = $_POST['nikistri'];
	$namasuami = $_POST['namasuami'];
	$namaistri = $_POST['namaistri'];
	$tempat = $_POST['tempat'];
	$tanggal = $_POST['tanggal'];
	$bulan = $_POST['bulan'];
	$tahun = $_POST['tahun'];
	$nama_pemuka_agama = $_POST['nama_pemuka_agama'];


	$suratnikah = $_FILES['suratnikah']['name'];
	$suratnikahTmpName = $_FILES['suratnikah']['tmp_name'];
	$path = "../dataFoto/suratnikah/" . $suratnikah;
	move_uploaded_file($suratnikahTmpName, $path);

	$ktpsuami = $_FILES['ktpsuami']['name'];
	$ktpsuamiTmpName = $_FILES['ktpsuami']['tmp_name'];
	$path = "../dataFoto/ktpsuami/" . $ktpsuami;
	move_uploaded_file($ktpsuamiTmpName, $path);

	$kksuami = $_FILES['kksuami']['name'];
	$kksuamiTmpName = $_FILES['kksuami']['tmp_name'];
	$path = "../dataFoto/kksuami/" . $kksuami;
	move_uploaded_file($kksuamiTmpName, $path);

	$aktasuami = $_FILES['aktasuami']['name'];
	$aktasuamiTmpName = $_FILES['aktasuami']['tmp_name'];
	$path = "../dataFoto/aktasuami/" . $aktasuami;
	move_uploaded_file($aktasuamiTmpName, $path);

	$ktpistri = $_FILES['ktpistri']['name'];
	$ktpistriTmpName = $_FILES['ktpistri']['tmp_name'];
	$path = "../dataFoto/ktpistri/" . $ktpistri;
	move_uploaded_file($ktpistriTmpName, $path);

	$kkistri = $_FILES['kkistri']['name'];
	$kkistriTmpName = $_FILES['kkistri']['tmp_name'];
	$path = "../dataFoto/kkistri/" . $kkistri;
	move_uploaded_file($kkistriTmpName, $path);

	$aktaistri = $_FILES['aktaistri']['name'];
	$aktaistriTmpName = $_FILES['aktaistri']['tmp_name'];
	$path = "../dataFoto/aktaistri/" . $aktaistri;
	move_uploaded_file($aktaistriTmpName, $path);


	$sql = "INSERT INTO data_request_akta (nik,ktpistri,kksuami,aktaistri,kkistri,aktasuami,ktpsuami,suratnikah,niksuami,nikistri,namasuami,namaistri,tempat,tanggal,bulan,tahun,nama_pemuka_agama) VALUES ('$nik','$ktpistri','$kksuami','$aktaistri','$kkistri','$aktasuami','$ktpsuami','$suratnikah','$niksuami','$nikistri','$namasuami','$namaistri','$tempat','$tanggal','$bulan','$tahun','$nama_pemuka_agama')";
	$query = mysqli_query($konek, $sql) or die(mysqli_error($konek));

	if ($query) {


		echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=request_sktm">';
	}
}

?>