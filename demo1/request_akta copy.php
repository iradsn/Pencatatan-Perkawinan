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
									<input type="text" name="keterangan" class="form-control" value="<?= $agama; ?>" readonly>
								</div>
								<div class="form-group">
									<label>NIK Suami</label>
									<input type="text" name="niksuami" class="form-control" placeholder="NIK SUAMI" onkeyup="this.value = this.value.toUpperCase()" autofocus>
								</div>
								<div class="form-group">
									<label>NIK Istri</label>
									<input type="text" name="nikistri" class="form-control" placeholder="NIK ISTRI" onkeyup="this.value = this.value.toUpperCase()" autofocus>
								</div>
								<div class="form-group">
									<label>Nama Suami</label>
									<input type="text" name="namasuami" class="form-control" placeholder="NAMA SUAMI" onkeyup="this.value = this.value.toUpperCase()" autofocus>
								</div>
								<div class="form-group">
									<label>Nama Istri</label>
									<input type="text" name="namaistri" class="form-control" placeholder="NAMA ISTRI" onkeyup="this.value = this.value.toUpperCase()" autofocus>
								</div>
								<div class="form-group">
									<label>Tempat Menikah</label>
									<input type="text" name="tempat" class="form-control" placeholder="TEMPAT MENIKAH" onkeyup="this.value = this.value.toUpperCase()" autofocus>
								</div>
								<div class="form-group">
									<label>Tanggal Menikah</label>
									<input type="text" name="tanggal" class="form-control" placeholder="Contoh : TIGA PULUH SATU" onkeyup="this.value = this.value.toUpperCase()" autofocus>
								</div>
								<div class="form-group">
									<label>Bulan Menikah</label>
									<select name="bulan" id="" class="form-control" autofocus>
										<option value="JANUARI">JANUARI</option>
										<option value="FEBRUARI">FEBRUARI</option>
										<option value="MARET">MARET</option>
										<option value="APRIL">FEBRUARI</option>
										<option value="MEI">MEI</option>
										<option value="JUNI">JUNI</option>
										<option value="JULI">JULI</option>
										<option value="AGUSTUS">AGUSTUS</option>
										<option value="SEPTEMBER">SEPTEMBER</option>
										<option value="OKTOBER">OKTOBER</option>
										<option value="NOVEMBER">NOVEMBER</option>
										<option value="DESEMBER">DESEMBER</option>
									</select>
								</div>
								<div class="form-group">
									<label>Tahun Menikah</label>
									<input type="text" name="tahun" class="form-control" placeholder="Contoh : DUA RIBU SATU" onkeyup="this.value = this.value.toUpperCase()" autofocus>
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
									<input type="file" name="aktaistri" class="form-control" size="37">
								</div>





							</div>
						</div>
					</div>
					<div class="card-action">
						<button name="kirim" class="btn btn-success">Kirim</button>
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

	$nama_suratnikah = isset($_FILES['suratnikah']);
	$file_suratnikah = $_POST['nik'] . "_" . ".jpg";

	$nama_ktpsuami = isset($_FILES['ktpsuami']);
	$file_ktpsuami = $_POST['nik'] . "_" . ".jpg";
	$nama_kksuami = isset($_FILES['kksuami']);
	$file_kksuami = $_POST['nik'] . "_" . ".jpg";
	$nama_aktasuami = isset($_FILES['aktasuami']);
	$file_aktasuami = $_POST['nik'] . "_" . ".jpg";
	$nama_ktpistri = isset($_FILES['ktpistri']);
	$file_ktpistri = $_POST['nik'] . "_" . ".jpg";
	$nama_kkistri = isset($_FILES['kkistri']);
	$file_kkistri = $_POST['nik'] . "_" . ".jpg";
	$nama_aktaistri = isset($_FILES['aktaistri']);
	$file_aktaistri = $_POST['nik'] . "_" . ".jpg";




	$sql = "INSERT INTO data_request_akta (nik,ktpistri,kksuami,aktaistri,kkistri,aktasuami,ktpsuami,suratnikah,niksuami,nikistri,namasuami,namaistri,tempat,tanggal,bulan,tahun,nama_pemuka_agama) VALUES ('$nik','$file_ktpistri','$file_kksuami','$file_aktaistri','$file_kkistri','$file_aktasuami','$file_ktpsuami','$file_suratnikah','$niksuami','$nikistri','$namasuami','$namaistri','$tempat','$tanggal','$bulan','$tahun','$nama_pemuka_agama')";
	$query = mysqli_query($konek, $sql) or die(mysqli_error($konek));

	if ($query) {
		copy($_FILES['suratnikah']['tmp_name'], "../dataFoto/suratnikah/" . $file_suratnikah);
		copy($_FILES['ktpsuami']['tmp_name'], "../dataFoto/ktpsuami/" . $file_ktpsuami);
		copy($_FILES['kksuami']['tmp_name'], "../dataFoto/kksuami/" . $file_kksuami);
		copy($_FILES['aktasuami']['tmp_name'], "../dataFoto/aktasuami/" . $file_aktasuami);
		copy($_FILES['ktpistri']['tmp_name'], "../dataFoto/ktpistri/" . $file_ktpistri);
		copy($_FILES['kkistri']['tmp_name'], "../dataFoto/kkistri/" . $file_kkistri);
		copy($_FILES['aktaistri']['tmp_name'], "../dataFoto/aktaistri/" . $file_aktaistri);

		echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=request_sktm">';
	}
}

?>