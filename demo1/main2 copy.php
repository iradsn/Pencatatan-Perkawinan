<?php
session_start();
if (isset($_SESSION['password']) == "" || ($_SESSION['hak_akses']) == "") {
	header('location:login.php');
} else {
	$hak_akses = $_SESSION['hak_akses'];
}
?>
<?php include 'header.php'; ?>
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
	<div class="sidebar-wrapper scrollbar scrollbar-inner">
		<div class="sidebar-content">
			<ul class="nav nav-primary">
				<li class="nav-item active">
					<a href="main2.php">
						<i class="fas fa-home"></i>
						<p>Dashboard</p>
					</a>
				<li class="nav-section">
					<span class="sidebar-mini-icon">
						<i class="fa fa-ellipsis-h"></i>
					</span>
					<h4 class="text-section"></h4>
				</li>
				<?php
				if ($hak_akses == "Staff") {
				?>
					<li class="nav-item">
						<a href="?halaman=tampil_user">
							<i class="fas fa-user-alt"></i>
							<p>Data User</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=tampil_pegawai">
							<i class="fas fa-users"></i>
							<p>Data Pegawai</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=permohonan_akta">
							<i class="far fa-calendar-check"></i>
							<p>Cetak Akta</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=akta_dicetak">
							<i class="far fa-calendar-check"></i>
							<p>Akta Selesai</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=tampil_perkawinank2">
							<i class="fas fa-fw fa-check-double"></i>
							<p>Data Akta Perkawinan K2</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=tampil_al">
							<i class="fas fa-fw fa-check-double"></i>
							<p>Data Akta Kelahiran Anak</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=tampil_ap">
							<i class="fas fa-fw fa-gavel"></i>
							<p>Data Akta Pengesahan Anak</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=tampil_cerai">
							<i class="fas fa-fw fa-gavel"></i>
							<p>Data Akta Perceraian</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=tampil_ceraik2">
							<i class="fas fa-fw fa-gavel"></i>
							<p>Data Akta Perceraian K2</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=tampil_pending">
							<i class="fas fa-fw fa-archive"></i>
							<p>Data Pending/Ditolak</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=permohonan_akta">
							<i class="far fa-calendar-check"></i>
							<p>Cetak Akta</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="?halaman=akta_dicetak">
							<i class="far fa-calendar-check"></i>
							<p>Akta Selesai</p>
						</a>
					</li>

				<?php
				} elseif ($hak_akses == "Kabid") {
				?>

				<?php
				}
				?>
				<li class="mx-4 mt-2">
					<a href="logout.php" class="btn btn-danger btn-block"><span class="btn-label mr-2"> <i class="icon-logout"></i> </span>Logout</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Sidebar -->

<div class="main-panel">
	<div class="content">
		<?php
		if (isset($_GET['halaman'])) {
			$hal = $_GET['halaman'];
			switch ($hal) {
				case 'beranda';
					include 'beranda.php';
					break;
				case 'ubah_pemohon';
					include 'ubah_pemohon.php';
					break;
				case 'tampil_pemohon';
					include 'tampil_pemohon.php';
					break;
				case 'request_sktm';
					include 'request_sktm.php';
					break;

				case 'tampil_status';
					include 'status_request.php';
					break;
				case 'belum_acc_akta';
					include 'belum_acc_akta.php';
					break;
				case 'acc_akta';
					include 'acc_akta.php';
					break;

				case 'detail_akta';
					include 'detail_akta.php';
					break;
				case 'detail_akta_kasi';
					include 'detail_akta_kasi.php';
					break;
				case 'cetak_akta';
					include 'cetak_akta.php';
					break;
				case 'bisacetak';
					include 'bisacetak.php';
					break;
				case 'tampil_user';
					include 'tampil_user.php';
					break;
				case 'tambah_user';
					include 'tambah_user.php';
					break;
				case 'ubah_user';
					include 'ubah_user.php';
					break;
				case 'tampil_pegawai';
					include 'tampil_pegawai.php';
					break;
				case 'tambah_pegawai';
					include 'tambah_pegawai.php';
					break;
				case 'ubah_pegawai';
					include 'ubah_pegawai.php';
					break;
				case 'tampil_perkawinank2';
					include 'tampil_perkawinank2.php';
					break;
				case 'tambah_perkawinank2';
					include 'tambah_perkawinank2.php';
					break;
				case 'ubah_perkawinank2';
					include 'ubah_perkawinank2.php';
					break;
				case 'tampil_al';
					include 'tampil_al.php';
					break;
				case 'tambah_al';
					include 'tambah_al.php';
					break;
				case 'ubah_al';
					include 'ubah_al.php';
					break;
				case 'tampil_ap';
					include 'tampil_ap.php';
					break;
				case 'tambah_ap';
					include 'tambah_ap.php';
					break;
				case 'ubah_ap';
					include 'ubah_ap.php';
					break;
				case 'tampil_cerai';
					include 'tampil_cerai.php';
					break;
				case 'tambah_cerai';
					include 'tambah_cerai.php';
					break;
				case 'ubah_cerai';
					include 'ubah_cerai.php';
					break;
				case 'tampil_ceraik2';
					include 'tampil_ceraik2.php';
					break;
				case 'tambah_ceraik2';
					include 'tambah_ceraik2.php';
					break;
				case 'ubah_ceraik2';
					include 'ubah_ceraik2.php';
					break;
				case 'tampil_pending';
					include 'tampil_pending.php';
					break;

				case 'tambah_pending';
					include 'tambah_pending.php';
					break;
				case 'ubah_pending';
					include 'ubah_pending.php';
					break;
				case 'ubah_pegawai';
					include 'ubah_pegawai.php';
					break;
				case 'view_akta';
					include 'view_akta.php';
					break;
				case 'view_cetak_akta';
					include 'view_cetak_akta.php';
					break;
				case 'akta_dicetak';
					include 'akta_dicetak.php';
					break;
				case 'laporan_perbulan';
					include 'laporan_perbulan.php';
					break;
				case 'laporan_pertahun';
					include 'laporan_pertahun.php';
					break;
				case 'permohonan_akta';
					include 'permohonan_akta.php';
					break;
				default:
					echo "<center>HALAMAN KOSONG</center>";
					break;
			}
		} else {
			include 'beranda2.php';
		}
		?>
	</div>
	<?php include 'footer.php'; ?>