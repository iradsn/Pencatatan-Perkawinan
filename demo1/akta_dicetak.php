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
                        <h4 class="card-title">PERMOHONAN AKTA PERKAWINAN SUDAH DICETAK</h4>
                    </div>
                    <a href="../phpfpdf6" class="btn btn-info btn-border btn-round btn-sm">
                        <span class="btn-label">
                            <i class="fa fa-print"></i>
                        </span>
                        Cetak Laporan
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add1" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Tanggal Permohonan</th>
                                    <th>NIK Pemohon</th>
                                    <th>Nama Suami</th>
                                    <th>Nama Istri</th>
                                    <th>Tempat Menikah</th>
                                    <th>Nama Pemuka Agama</th>


                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT
                                                    data_user.nik,
                                                    data_user.nama,
                                                    data_request_akta.tanggal_request,
                                                    data_request_akta.namasuami,
                                                    data_request_akta.namaistri,
                                                    data_request_akta.tempat,
                                                    data_request_akta.nama_pemuka_agama,
                                                 
                                                    data_request_akta.status
                                                FROM
                                                    data_user
                                                INNER JOIN data_request_akta ON data_request_akta.nik = data_user.nik
                                                WHERE data_request_akta.status = 3
                                                ";
                                // $sql = "SELECT * FROM data_request_skd natural join data_user WHERE status=3";
                                $query = mysqli_query($konek, $sql);
                                while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
                                    $tgl = $data['tanggal_request'];
                                    $format = date('d F Y', strtotime($tgl));
                                    $nik = $data['nik'];
                                    $nama = $data['nama'];
                                    $status = $data['status'];
                                    $namasuami = $data['namasuami'];
                                    $namaistri = $data['namaistri'];
                                    $tempat = $data['tempat'];
                                    $nama_pemuka_agama = $data['nama_pemuka_agama'];
                                    // $keterangan = $data['keterangan'];
                                    // $id= $data['id_request_skd'];

                                    if ($status == "1") {
                                        $status = "<b style='color:blue'>Sudah ACC Staf</b>";
                                    } elseif ($status == "0") {
                                        $status = "<b style='color:red'>BELUM ACC staf</b>";
                                    } elseif ($status == "3") {
                                        $status = "<b style='color:green'>AKTA SUDAH DICETAK</b>";
                                    }
                                ?>
                                    <tr>
                                        <td><?php echo $format; ?></td>
                                        <td><?php echo $nik; ?></td>
                                        <td><?php echo $namasuami; ?></td>
                                        <td><?php echo $namaistri; ?></td>
                                        <td><?php echo $tempat; ?></td>
                                        <td><?php echo $nama_pemuka_agama; ?></td>
                                        <td class="fw-bold text-uppercase text-danger op-8"><?php echo $status; ?></td>
                                    </tr>
                                    <!-- <?php
                                            if (isset($_GET['id_request_akta'])) {
                                                $hapus = mysqli_query($konek, "DELETE FROM data_request_akta WHERE id_request_akta=$id");
                                                if ($hapus) {
                                                    echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
                                                    echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
                                                } else {
                                                    echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
                                                    echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_status">';
                                                }
                                            }
                                            ?> -->
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>