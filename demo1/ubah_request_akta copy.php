<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_request_akta'])) {
	$id = $_GET['id_request_akta'];
	$tampil_nik = "SELECT * FROM data_request_akta NATURAL JOIN data_user WHERE id_request_akta=$id";
	$query = mysqli_query($konek, $tampil_nik);
	$data = mysqli_fetch_array($query, MYSQLI_BOTH);
	$id = $data['id_request_akta'];
	$nik = $data['nik'];
	$niksuami = $data['niksuami'];
	$nikistri = $data['nikistri'];
	$namasuami = $data['namasuami'];
	$namaistri = $data['namaistri'];
	$tempat = $data['tempat'];
	$tanggal = $data['tanggal'];
	$bulan = $data['bulan'];
	$tahun = $data['tahun'];
	$nama_pemuka_agama = $data['nama_pemuka_agama'];
	$agama = $data['agama'];
	$aktaistri = $data['aktaistri'];
	$kkistri = $data['kkistri'];
	$aktasuami = $data['aktasuami'];
	$ktpistri = $data['ktpistri'];
	$kksuami = $data['kksuami'];
	$ktpsuami = $data['ktpsuami'];
	$suratnikah = $data['suratnikah'];
}
?>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						<div class="card-title">UBAH PERMOHONAN PENCATATAN AKTA PERKAWINAN</div>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<label>NIK Pemohon</label>
									<input type="text" name="nik" class="form-control" value="<?= $nik . ' - ' . $nama; ?>" readonly>
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
									<input type="text" name="agama" class="form-control" value="<?= $agama ?>" autofocus>
								</div>
								<div class="form-group">
									<label>NIK Suami</label>
									<input type="text" name="niksuami" class="form-control" value="<?= $niksuami ?>" autofocus>
								</div>
								<div class="form-group">
									<label>NIK Istri</label>
									<input type="text" name="nikistri" class="form-control" value="<?= $nikistri ?>" autofocus>
								</div>
								<div class="form-group">
									<label>Nama Suami</label>
									<input type="text" name="namasuami" class="form-control" value="<?= $namasuami ?>" autofocus>
								</div>
								<div class="form-group">
									<label>Nama Istri</label>
									<input type="text" name="namaistri" class="form-control" value="<?= $namaistri ?>" autofocus>
								</div>


								<div class="form-group">
									<label>Tempat Menikah</label>
									<input type="text" name="tempat" class="form-control" value="<?= $tempat ?>" autofocus>
								</div>
								<div class="form-group">
									<label>Tanggal</label>
									<input type="text" name="tanggal" class="form-control" value="<?= $tanggal ?>" autofocus>
								</div>
								<div class="form-group">
									<label>Bulan</label>
									<input type="text" name="bulan" class="form-control" value="<?= $bulan ?>" autofocus>
								</div>
								<div class="form-group">
									<label>Tahun</label>
									<input type="text" name="tahun" class="form-control" value="<?= $tahun ?>" autofocus>
								</div>
								<div class="form-group">
									<label>Nama Pemuka Agama</label>
									<input type="text" name="nama_pemuka_agama" class="form-control" value="<?= $nama_pemuka_agama ?>" autofocus>
								</div>


							</div>

							<div class="col-md-6 col-lg-6">
								<div class="form-group">
									<div class="form-group">
										<label>Surat Nikah</label><br>
										<?php
										if ($data['suratnikah'] == '') {
											echo "<img class=\"memberImage\" width='200' height='200' src=img/noimage.jpg>";
										} else {
											echo "<img class=\"memberImage\" width='200' height='200' src=../dataFoto/suratnikah/" . $data['suratnikah'] . ">";
										}

										?>
									</div>
									<div class="form-group">
										<input type="file" name="suratnikah" class="form-control" size="37">
									</div>
									<div class="form-group">
										<label>KTP Suami</label><br>
										<?php
										if ($data['ktpsuami'] == '') {
											echo "<img class=\"memberImage\" width='200' height='200' src=img/noimage.jpg>";
										} else {
											echo "<img class=\"memberImage\" width='200' height='200' src=../dataFoto/ktpsuami/" . $data['ktpsuami'] . ">";
										}

										?>
									</div>
									<div class="form-group">
										<input type="file" name="ktpsuami" class="form-control" size="37">
									</div>
									<label>Kartu Keluarga Suami</label><br>
									<?php
									if ($data['kksuami'] == '') {
										echo "<img class=\"memberImage\" width='200' height='200' src=img/noimage.jpg>";
									} else {
										echo "<img class=\"memberImage\" width='200' height='200' src=../dataFoto/kksuami/" . $data['kksuami'] . ">";
									}
									?>

								</div>
								<div class="form-group">
									<input type="file" name="kksuami" class="form-control" size="37">
								</div>
								<div class="form-group">
									<label>Akta Kelahiran Suami</label><br>
									<?php
									if ($data['aktasuami'] == '') {
										echo "<img class=\"memberImage\" width='200' height='200' src=img/noimage.jpg>";
									} else {
										echo "<img class=\"memberImage\" width='200' height='200' src=../dataFoto/aktasuami/" . $data['aktasuami'] . ">";
									}

									?>
								</div>
								<div class="form-group">
									<input type="file" name="aktasuami" class="form-control" size="37">
								</div>
								<div class="form-group">
									<label>KTP Istri</label><br>
									<?php
									if ($data['ktpistri'] == '') {
										echo "<img class=\"memberImage\" width='200' height='200' src=img/noimage.jpg>";
									} else {
										echo "<img class=\"memberImage\" width='200' height='200' src=../dataFoto/ktpistri/" . $data['ktpistri'] . ">";
									}

									?>
								</div>
								<div class="form-group">
									<input type="file" name="ktpistri" class="form-control" size="37">
								</div>
								<div class="form-group">
									<label>Kartu Keluarga Istri</label><br>
									<?php
									if ($data['kkistri'] == '') {
										echo "<img class=\"memberImage\" width='200' height='200' src=img/noimage.jpg>";
									} else {
										echo "<img class=\"memberImage\" width='200' height='200' src=../dataFoto/kkistri/" . $data['kkistri'] . ">";
									}

									?>
								</div>
								<div class="form-group">
									<input type="file" name="kkistri" class="form-control" size="37">
								</div>
								<div class="form-group">
									<label>Akta Kelahiran Istri</label><br>
									<?php
									if ($data['aktaistri'] == '') {
										echo "<img class=\"memberImage\" width='200' height='200' src=img/noimage.jpg>";
									} else {
										echo "<img class=\"memberImage\" width='200' height='200' src=../dataFoto/aktaistri/" . $data['aktaistri'] . ">";
									}

									?>
								</div>
								<div class="form-group">
									<input type="file" name="aktaistri" class="form-control" size="37">
								</div>
							</div>
						</div>
					</div>
					<div class="card-action">
						<button name="ubah" class="btn btn-success">Ubah</button>
						<a href="?halaman=tampil_status" class="btn btn-default">Batal</a>
					</div>
				</div>
		</div>
		</form>
	</div>
</div>

<?php
if (isset($_POST['ubah'])) {
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

	$sql = "UPDATE data_request_akta SET
    niksuami='$niksuami',
	nikistri='$nikistri',
	namasuami='$namasuami',
	namaistri='$namaistri',
	tempat='$tempat',
	tanggal='$tanggal',
	bulan='$bulan',
	tahun='$tahun',
	nama_pemuka_agama='$nama_pemuka_agama',
    suratnikah='$file_suratnikah',
    ktpsuami='$file_ktpsuami' 
	
	WHERE id_request_akta=$id";
	$query = mysqli_query($konek, $sql);

	if ($query) {
		copy($_FILES['suratnikah']['tmp_name'], "../dataFoto/suratnikah/" . $file_suratnikah);
		copy($_FILES['ktpsuami']['tmp_name'], "../dataFoto/ktpsuami/" . $file_ktpsuami);
		copy($_FILES['kksuami']['tmp_name'], "../dataFoto/kksuami/" . $file_kksuami);
		copy($_FILES['aktasuami']['tmp_name'], "../dataFoto/aktasuami/" . $file_aktasuami);
		copy($_FILES['ktpistri']['tmp_name'], "../dataFoto/ktpistri/" . $file_ktpistri);
		copy($_FILES['kkistri']['tmp_name'], "../dataFoto/kkistri/" . $file_kkistri);
		copy($_FILES['aktaistri']['tmp_name'], "../dataFoto/aktaistri/" . $file_aktaistri);
		echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_sktm">';
	}
}

?>