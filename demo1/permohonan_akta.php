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
									<th>NIK Pemohon</th>
									<th>Nama Suami</th>
									<th>Nama Istri</th>
									<th>Surat Nikah</th>
									<th style="width: 10%">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM data_request_akta natural join data_user WHERE status=2";
								$query = mysqli_query($konek, $sql);
								while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
									$id_request_akta = $data['id_request_akta'];
									$tgl = $data['tanggal_request'];
									$format = date('d F Y', strtotime($tgl));
									$nik = $data['nik'];
									$nama = $data['nama'];
									$status = $data['status'];
									$suratnikah = $data['suratnikah'];
									$namasuami = $data['namasuami'];
									$namaistri = $data['namaistri'];
									$tempat = $data['tempat'];


									if ($status == "1") {
										$status = "<b style='color:blue'>ACC</b>";
									} elseif ($status == "0") {
										$status = "<b style='color:red'>BELUM ACC</b>";
									}
								?>
									<tr>
										<td><?php echo $format; ?></td>
										<td><?php echo $nik; ?></td>
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
											<div class="form-button-action">
												<a href="?halaman=view_cetak_akta&id_request_akta=<?= $id_request_akta; ?>">
													<button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Cetak">
														<i class="fa fa-edit"></i>
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



		</tr>
		<?php

		?>
		<?php
		if (isset($_POST['kirim'])) {
			$keterangan = $_POST['keterangan'];
			$sql = mysqli_query($konek, "UPDATE data_request_skd SET
					keterangan='$keterangan', status='3' WHERE id_request_skd='$id_request_skd'");
			if ($sql) {
				echo "<script language='javascript'>swal('Selamat...', 'Kirim Berhasil!', 'success');</script>";
				echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_akta">';
			} else {
				echo "<script language='javascript'>swal('Gagal...', 'Kirim Gagal!', 'error');</script>";
				echo '<meta http-equiv="refresh" content="3; url=?halaman=permohonan_akta">';
			}
		}
		?>
		</tbody>
		</table>
	</div>
</div>
</form>
</div>
</div>




</div>
</div>