<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<div class="page-inner">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">STATUS PERMOHONAN PENCATATAN AKTA PERKAWINAN</h4>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table id="add1" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th>Tanggal Request</th>

									<th>NIK</th>
									<th>NIK Suami</th>
									<th>NIK Istri</th>
									<th>Nama Suami</th>
									<th>Nama Istri</th>
									<th>Tempat</th>
									<th>Tanggal</th>
									<th>Agama</th>
									<th>Nama Pemuka Agama</th>
									<th>Surat Nikah</th>
									<th>KTP Suami</th>
									<th>Kartu Keluarga Suami</th>
									<th>Akta Kelahiran Suami</th>
									<th>KTP Istri</th>
									<th>Kartu Keluarga Istri</th>
									<th>Akta Kelahiran Istri</th>
									<th>Status</th>
									<th>Keterangan</th>
									<th>Unduh</th>


									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_akta natural join data_user WHERE nik=$_SESSION[nik]";
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$status = $data['status'];
									$aktaistri = $data['aktaistri'];
									$kkistri = $data['kkistri'];
									$aktasuami = $data['aktasuami'];
									$ktpistri = $data['ktpistri'];
									$kksuami = $data['kksuami'];
									$ktpsuami = $data['ktpsuami'];
									$suratnikah = $data['suratnikah'];
									$niksuami = $data['niksuami'];
									$nikistri = $data['nikistri'];
									$namasuami = $data['namasuami'];
									$namaistri = $data['namaistri'];
									$tempat = $data['tempat'];
									$tanggal = $data['tanggal'];
									$bulan = $data['bulan'];
									$tahun = $data['tahun'];
									$agama = $data['agama'];
									$nama_pemuka_agama = $data['nama_pemuka_agama'];
									$keterangan = $data['keterangan'];
									$berkas = $data['berkas'];
									$id_request_akta = $data['id_request_akta'];

									if ($status == "1") {
										$status = "<b style='color:green'>Sudah ACC Staff</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC Staff</b>";
									} elseif ($status == "2") {
										$status = "<b style='color:blue'>Sudah ACC Kabid</b>";
									} elseif ($status == "3") {
										$status = "<b style='color:green'>SURAT SUDAH DICETAK</b>";
									}


								?>

									<tr>
										<td><?php echo $format; ?></td>


										<td><?php echo $nik; ?></td>
										<td><?php echo $niksuami; ?></td>
										<td><?php echo $nikistri; ?></td>
										<td><?php echo $namasuami; ?></td>
										<td><?php echo $namaistri; ?></td>
										<td><?php echo $tempat; ?></td>
										<td><?php echo $tanggal; ?></td>
										<td><?php echo $agama; ?></td>
										<td><?php echo $nama_pemuka_agama; ?></td>


										<td>
											<?php
											if ($data['suratnikah'] == '') {
												echo "<img class=\"memberImage\" width='60' height='60' src=img/noimage.jpg>";
											} else {
												echo "<img class=\"memberImage\" width='60' height='60' src=../dataFoto/suratnikah/" . $data['suratnikah'] . ">";
											}

											?>
										</td>

										<td>
											<?php
											if ($data['ktpsuami'] == '') {
												echo "<img class=\"memberImage\" width='60' height='60' src=img/noimage.jpg>";
											} else {
												echo "<img class=\"memberImage\" width='60' height='60' src=../dataFoto/ktpsuami/" . $data['ktpsuami'] . ">";
											}

											?>
										</td>
										<td>
											<?php
											if ($data['kksuami'] == '') {
												echo "<img class=\"memberImage\" width='60' height='60' src=img/noimage.jpg>";
											} else {
												echo "<img class=\"memberImage\" width='60' height='60' src=../dataFoto/kksuami/" . $data['kksuami'] . ">";
											}

											?>
										</td>
										<td>
											<?php
											if ($data['aktasuami'] == '') {
												echo "<img class=\"memberImage\" width='60' height='60' src=img/noimage.jpg>";
											} else {
												echo "<img class=\"memberImage\" width='60' height='60' src=../dataFoto/aktasuami/" . $data['aktasuami'] . ">";
											}

											?>
										</td>
										<td>
											<?php
											if ($data['ktpistri'] == '') {
												echo "<img class=\"memberImage\" width='60' height='60' src=img/noimage.jpg>";
											} else {
												echo "<img class=\"memberImage\" width='60' height='60' src=../dataFoto/ktpistri/" . $data['ktpistri'] . ">";
											}

											?>
										</td>
										<td>
											<?php
											if ($data['kkistri'] == '') {
												echo "<img class=\"memberImage\" width='60' height='60' src=img/noimage.jpg>";
											} else {
												echo "<img class=\"memberImage\" width='60' height='60' src=../dataFoto/kkistri/" . $data['kkistri'] . ">";
											}

											?>
										</td>
										<td>
											<?php
											if ($data['aktaistri'] == '') {
												echo "<img class=\"memberImage\" width='60' height='60' src=img/noimage.jpg>";
											} else {
												echo "<img class=\"memberImage\" width='60' height='60' src=../dataFoto/aktaistri/" . $data['aktaistri'] . ">";
											}

											?>
										</td>



										<td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
										<td><i><?php echo $keterangan; ?></i></td>
										<td>


											<a href="download.php?file=<?php echo $berkas; ?>"><button class="btn btn-primary btn-xs">Unduh</button></a>

										</td>

										<td>
											<div class="form-button-action">
												<a href="?halaman=ubah_request_akta&id_request_akta=<?= $id_request_akta; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
														<i class="fa fa-edit"></i>
													</button>
												</a>
												<a href="?halaman=tampil_status&id_request_akta=<?= $id_request_akta; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
														<i class="fa fa-times"></i>
													</button>
												</a>
											</div>
										</td>
									</tr>
								<?php
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>






		</td>
		</tr>

		<?php

		?>
		</tbody>
		</table>
	</div>
</div>
</div>
</div>
</div>
</div>

<?php
if (isset($_GET['id_request_akta'])) {
	$hapus = mysqli_query($konek, "DELETE FROM data_request_akta WHERE id_request_akta=$id_request_akta");
	if ($hapus) {
		echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	} else {
		echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
		echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
	}
}
?>