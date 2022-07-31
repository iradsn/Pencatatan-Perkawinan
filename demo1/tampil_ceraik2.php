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
                        <h4 class="card-title">DATA AKTA PERCERAIAN KUTIPAN KE-DUA</h4>
                        <a href="?halaman=tambah_ceraik2" class="btn btn-primary btn-round ml-auto">
                            <i class=" fa fa-plus"></i>
                            Tambah Perceraian K2
                        </a>

                    </div>
                    <a href="../phpfpdf9" class="btn btn-info btn-border btn-round btn-sm">
                        <span class="btn-label">
                            <i class="fa fa-print"></i>
                        </span>
                        Cetak Laporan
                    </a>

                </div>

                <div class="card-body">
                    <!-- Modal -->
                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header no-bd">
                                    <h5 class="modal-title">
                                        <span class="fw-mediumbold">
                                            New
                                        </span>
                                        <span class="fw-light">
                                            Row
                                        </span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="small">Create a new row using this form, make sure you fill them all</p>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group form-group-default">
                                                <label>Name</label>
                                                <input id="addName" type="text" class="form-control" placeholder="fill name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pr-0">
                                            <div class="form-group form-group-default">
                                                <label>Position</label>
                                                <input id="addPosition" type="text" class="form-control" placeholder="fill position">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Office</label>
                                                <input id="addOffice" type="text" class="form-control" placeholder="fill office">
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="modal-footer no-bd">
                                    <button type="button" id="addRowButton" class="btn btn-primary">Add</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>

                    </div>
                    <form action="">
                        <div class="table-responsive">
                            <table id="add" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>No. Akta Cerai</th>
                                        <th>Nama Bekas Suami</th>
                                        <th>Nama Bekas Istri</th>
                                        <th>Data Perceraian Salah</th>
                                        <th>Data Perceraian Benar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $tampil = mysqli_query($konek, "SELECT * FROM data_k2_aktaperceraian, data_akta_perceraian
                                    WHERE data_k2_aktaperceraian.id_akta_perceraian = data_akta_perceraian.id_akta_perceraian") or die(mysqli_error($konek));


                                    while ($data = mysqli_fetch_array($tampil)) {

                                        $id_akta_perceraian = $data['id_akta_perceraian'];
                                        $nama_bekas_suami = $data['nama_bekas_suami'];
                                        $nama_bekas_istri = $data['nama_bekas_istri'];
                                        $kesalahan_data = $data['kesalahan_data'];
                                        $pembetulan_data = $data['pembetulan_data'];
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>

                                            <td><?php echo $id_akta_perceraian; ?></td>
                                            <td><?php echo $nama_bekas_suami; ?></td>
                                            <td><?php echo $nama_bekas_istri; ?></td>
                                            <td><?php echo $kesalahan_data; ?></td>
                                            <td><?php echo $pembetulan_data; ?></td>


                                            <td>
                                                <div class="form-button-action">
                                                    <a href="?halaman=ubah_ceraik2&id_akta_perceraian=<?php echo $id_akta_perceraian; ?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <a href="?halaman=tampil_ceraik2&id_akta_perceraian=<?php echo $id_akta_perceraian; ?>" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus Data">
                                                        <i class="fa fa-times"></i>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
if (isset($_GET['nama_lengkap'])) {
    $sql_hapus = "DELETE FROM data_perkawinank2 WHERE nama_lengkap='" . $_GET['nama_lengkap'] . "'";
    $query_hapus = mysqli_query($konek, $sql_hapus);
    if ($query_hapus) {
        echo "<script language='javascript'>swal('Selamat...', 'Hapus Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_ap">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Hapus Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_ap">';
    }
}
?>