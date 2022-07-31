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
						<h4 class="fw-bold text-uppercase">BELUM ACC PERMOHONAN PENCATATAN AKTA PERKAWINAN</h4>
					</div>
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<div class="table-responsive">
							<table id="add1" class="display table table-striped table-hover">
								<thead>
									<tr>
										<th>Tanggal Request</th>
										<th>NIK Pemohon</th>
										<th>Nama Suami</th>
										<th>Nama Istri</th>
										<th>Surat Nikah</th>
										<th>Keterangan</th>
										<th style="width: 10%">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$sql = "SELECT * FROM data_request_akta natural join data_user where status=1";
									$query = mysqli_query($konek, $sql);
									while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
										$tgl = $data['tanggal_request'];
										$format = date('d F Y', strtotime($tgl));
										$nik = $data['nik'];
										$nama = $data['nama'];
										$namasuami = $data['namasuami'];
										$namaistri = $data['namaistri'];
										$status = $data['status'];
										$id = $data['id_request_akta'];
										$suratnikah = $data['suratnikah'];
										$keterangan = $data['keterangan'];
										$id_request_akta = $data['id_request_akta'];

										if ($status == "1") {
											$status = "Sudah ACC Staf";
										} elseif ($status == "0") {
											$status = "BELUM ACC";
										}
									?>
										<tr>
											<td><?php echo $format; ?></td>
											<td><?php echo $nik; ?></td>
											<td><?php echo $namasuami; ?></td>
											<td><?php echo $namaistri; ?></td>
											<td class="fw-bold text-uppercase text-success op-8"><?php echo $status; ?></td>
											<td><?php
												if ($data['suratnikah'] == '') {
													echo "<img class=\"memberImage\" width='60' height='60' src=img/noimage.jpg>";
												} else {
													echo "<img class=\"memberImage\" width='60' height='60' src=../dataFoto/suratnikah/" . $data['suratnikah'] . ">";
												}

												?></td>
											<td><i><?php echo $keterangan; ?></i></td>
											<!-- <td>
															<input type="checkbox" name="check[$i]" value="<?php echo $id; ?>">
															<input type="submit" name="acc" class="btn btn-primary btn-sm" value="ACC">
															<div class="form-button-action">
																<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Lihat Surat" href="?halaman=detail_akta&id_request_akta=<?= $id_request_akta; ?>">
																<i class="fa fa-edit"></i></a>
															</div>
														</td> -->
											<td>
												<div class="form-button-action">
													<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Akta Kelahiran" href="?halaman=view_akta&id_request_akta=<?= $id_request_akta; ?>">
														<i class="fas fa-print"></i></a>
												</div>
												<div class="form-button-action">
													<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Cek Data" href="?halaman=detail_akta_kasi&id_request_akta=<?= $id_request_akta; ?>">
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