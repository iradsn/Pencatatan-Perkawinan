<?php
if (!isset($_SESSION)) {
	session_start();
}
if (isset($_SESSION['password']) == "" || ($_SESSION['hak_akses']) == "") {
	header('location:login.php');
} else {
	$hak_akses = $_SESSION['hak_akses'];
	$nama = $_SESSION['nama'];
	$nik = $_SESSION['nik'];
}
?>
<?php
if ($hak_akses == "Pemohon") {
?>
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Halo <?php echo $nama; ?>!</h2>
					<h5 class="text-white op-7 mb-2">Sebelum Anda Permohonan Pencatatan Perkawinan Lengkapi Biodata Anda, Klik Biodata Anda</h5>
				</div>
				<div class="ml-md-auto py-2 py-md-0">
					<a href="?halaman=tampil_pemohon" class="btn btn-sm btn-primary btn-round"><span class="btn-label">
							<i class="fas fa-user"></i> Biodata Anda</a>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner mt--7">
		<div class="row mt--2">
			<div class="col-md-12 pr-md-0">
				<div class="">
					<div class="">

					</div>

				</div>
				<ul class="">
				</ul>

			</div>

		</div>
	</div>

	<div class="card text-center">
		<div class="card-header">

		</div>
		<div class="card-body">
			<h5 class="card-title">PERMOHONAN</h5>
			<p class="card-text">PENCATATAN PERKAWINAN</p>
			<a href="?halaman=request_akta" class="btn btn-primary btn-round btn-sm mb-3">
				<span class="btn-label">
					<i class="fas fa-plus-circle"></i>
				</span>Buat Permohonan</a>

		</div>
		<div class="card-footer text-muted">

		</div>
	</div>
<?php
} elseif ($hak_akses == "Staf") {
?>
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Halo <?php echo $hak_akses; ?>!</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner">
		<!-- Card -->
		<h3 class="fw-bold text-uppercase">JUMLAH REQUEST PENCATATAN PERKAWINAN SUDAH ACC</h3>
		<!-- Card With Icon States Background -->
		<div class="row">
			<div class="col-sm-10 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body ">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_akta">
								<div class="col-icon">
									<div class="icon-big text-center icon-primary bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">AKTA</p>
									<?php
									$sql = "SELECT * FROM data_request_akta WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<a href="?halaman=sudah_acc_skd">
								<div class="col-icon">
									<div class="icon-big text-center icon-secondary bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">SKD</p>
									<?php
									$sql = "SELECT * FROM data_request_skd WHERE status=1";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									// if($status=="1"){
									// 	$count ="Belum ada request";
									// }


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
} elseif ($hak_akses == "Kasi") {
?>
	<div class="panel-header bg-primary-gradient">
		<div class="page-inner py-5">
			<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
				<div>
					<h2 class="text-white pb-2 fw-bold">Halo <?php echo $hak_akses; ?>!</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="page-inner">
		<!-- Card -->
		<h4 class="page-title">TAMPIL REQUEST PERUBAHAN AKTA KELAHIRAN</h4>
		<!-- Card With Icon States Background -->
		<div class="row">
			<div class="col-sm-6 col-md-3">
				<div class="card card-stats card-round">
					<div class="card-body ">
						<div class="row align-items-center">
							<a href="?halaman=belum_acc_akta">
								<div class="col-icon">
									<div class="icon-big text-center icon-primary bubble-shadow-small">
										<i class="flaticon-envelope-1"></i>
									</div>
								</div>
							</a>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">PERMOHONAN PENCATATAN AKTA PERKAWINAN</p>
									<?php
									$sql = "SELECT * FROM data_request_akta WHERE status=0";
									$query = mysqli_query($konek, $sql);
									$data = mysqli_fetch_array($query, MYSQLI_BOTH);
									$count = mysqli_num_rows($query);
									$status = $data['status'];

									if ($status == "1") {
										$count = "Belum ada request";
									}


									?>
									<h4 class="card-title"><?php echo $count; ?></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
<?php
}
?>