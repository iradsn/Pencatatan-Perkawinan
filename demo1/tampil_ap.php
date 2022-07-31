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
                        <h4 class="card-title">DATA AKTA PENGESAHAN ANAK</h4>
                        <a href="?halaman=tambah_ap" class="btn btn-primary btn-round ml-auto">
                            <i class=" fa fa-plus"></i>
                            Tambah Pengesahan Anak
                        </a>

                    </div>
                    <a href="../phpfpdf3" class="btn btn-info btn-border btn-round btn-sm">
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
                                        <th>No. Akta Kelahiran</th>
                                        <th>Nama Anak</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Nama Ayah</th>
                                        <th>Nama Ibu</th>
                                        <th>Tanggal Pemberkatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $tampil = mysqli_query($konek, "SELECT * FROM data_pengesahan_anak, data_akta_kelahiran
                                    WHERE data_pengesahan_anak.id_akta_kelahiran = data_akta_kelahiran.id_akta_kelahiran") or die(mysqli_error($konek));


                                    while ($data = mysqli_fetch_array($tampil)) {

                                        $id_akta_kelahiran = $data['id_akta_kelahiran'];
                                        $nama = $data['nama'];
                                        $tanggal_lahir = $data['tanggal_lahir'];
                                        $nama_ayah = $data['nama_ayah'];
                                        $nama_ibu = $data['nama_ibu'];
                                        $tanggal_pemberkatan = $data['tanggal_pemberkatan'];
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>

                                            <td><?php echo $id_akta_kelahiran; ?></td>
                                            <td><?php echo $nama; ?></td>
                                            <td><?php echo $tanggal_lahir; ?></td>
                                            <td><?php echo $nama_ayah; ?></td>
                                            <td><?php echo $nama_ibu; ?></td>
                                            <td><?php echo $tanggal_pemberkatan; ?></td>


                                            <td>
                                                <div class="form-button-action">
                                                    <a href="?halaman=ubah_ap&id_akta_kelahiran=<?php echo $id_akta_kelahiran; ?>" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Data">
                                                        <i class="fa fa-edit"></i>
                                                    </a>

                                                    <a href="?halaman=tampil_ap&id_akta_kelahiran=<?php echo $id_akta_kelahiran; ?>" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Hapus Data">
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
if (isset($_GET['id_akta_kelahiran'])) {
    $sql_hapus = "DELETE FROM data_pengesahan_anak WHERE id_akta_kelahiran='" . $_GET['id_akta_kelahiran'] . "'";
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