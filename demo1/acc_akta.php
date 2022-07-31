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
						<h4 class="fw-bold text-uppercase">TAMPIL ACC PERMOHONAN PENCATATAN AKTA PERKAWINAN</h4>
					</div>
				</div>
				<div class="card-body">
					<form method="POST">
						<div class="table-responsive">
							<table id="add1" class="display table table-striped table-hover">
								<thead>
									<tr>
										<th>Tanggal Permohonan</th>
										<th>NIK</th>
										<th>NIK Suami</th>
										<th>NIK Istri</th>
										<th>Nama Suami</th>
										<th>Nama Istri</th>
										<th>Surat Nikah</th>
										<th style="width: 10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i = 1;
									$sql = "SELECT * FROM data_request_akta natural join data_user WHERE status=0";
									$query = mysqli_query($konek, $sql);
									while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
										$id_request_akta = $data['id_request_akta'];
										$tgl = $data['tanggal_request'];
										$format = date('d F Y', strtotime($tgl));
										$nik = $data['nik'];
										$niksuami = $data['niksuami'];
										$nikistri = $data['nikistri'];
										$namasuami = $data['namasuami'];
										$namaistri = $data['namaistri'];
										$status = $data['status'];
										$suratnikah = $data['suratnikah'];
										$suratnikah = $data['suratnikah'];
										$keterangan = $data['keterangan'];

										if ($status == "1") {
											$status = "<b style='color:blue'>ACC</b>";
										} elseif ($status == "0") {
											$status = "<b style='color:red'>BELUM ACC</b>";
										}
									?>
										<tr>
											<td><?php echo $format; ?></td>
											<td><?php echo $nik; ?></td>
											<td><?php echo $niksuami; ?></td>
											<td><?php echo $nikistri; ?></td>
											<td><?php echo $namasuami; ?></td>
											<td><?php echo $namaistri; ?></td>
											<td><?php
												if ($data['suratnikah'] == '') {
													echo "<img class=\"memberImage\" width='60' height='60' src=img/noimage.jpg>";
												} else {
													echo "<img class=\"memberImage\" width='60' height='60' src=../dataFoto/suratnikah/" . $data['suratnikah'] . ">";
												}

												?></td>

											<td>

												<input type="checkbox" name="check[$i]" value="<?php echo $id_request_akta; ?>">
												<input type="submit" name="acc" class="btn btn-primary btn-sm" value="ACC">
												<div class="form-button-action">
													<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Cek Data" href="?halaman=detail_akta&id_request_akta=<?= $id_request_akta; ?>">
														<i class="fa fa-edit"></i></a>
												</div>
											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>

<?php
if (isset($_POST['acc'])) {
	if (isset($_POST['check'])) {
		foreach ($_POST['check'] as $value) {
			// echo $value;
			$ubah = "UPDATE data_request_akta set status =1 where id_request_akta = $value";

			$query = mysqli_query($konek, $ubah);

			if ($query) {
				echo "<script language='javascript'>swal('Selamat...', 'ACC Staf Berhasil!', 'success');</script>";
				echo '<meta http-equiv="refresh" content="3; url=?halaman=acc_akta">';
			} else {
				echo "<script language='javascript'>swal('Gagal...', 'ACC Staf Gagal!', 'error');</script>";
				echo '<meta http-equiv="refresh" content="3; url=?halaman=acc_akta">';
			}
		}
	}
}
?>