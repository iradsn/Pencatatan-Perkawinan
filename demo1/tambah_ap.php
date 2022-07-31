<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <form method="POST">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">FORM TAMBAH AKTA PENGESAHAN ANAK</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Tanggal Pemberkatan</label>
                                        <input type="date" name="tanggal_pemberkatan" class="form-control" placeholder="Nama Dukcapil.." onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Anak</label>
                                        <select name="id_akta_kelahiran" class="form-control input-border-bottom">
                                            <option>Pilih Nama Anak</option>
                                            <?php
                                            $query = mysqli_query($konek, "SELECT * FROM data_akta_kelahiran") or die(mysqli_error($konek));
                                            while ($data = mysqli_fetch_array($query)) {
                                                echo "<option value=$data[id_akta_kelahiran]> $data[nama] - $data[tanggal_lahir] </option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button name="simpan" class="btn btn-success btn-sm">Simpan</button>
                            <a href="?halaman=tampil_ap" class="btn btn-default btn-sm">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['simpan'])) {

        mysqli_query($konek, "insert into data_pengesahan_anak set

        tanggal_pemberkatan = '$_POST[tanggal_pemberkatan]',
        id_akta_kelahiran = '$_POST[id_akta_kelahiran]'") or die(mysqli_error($konek));

        if ($query) {
            echo "<script language='javascript'>swal('Selamat...', 'Tambah Berhasil', 'success');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_ap">';
        } else {
            echo "<script language='javascript'>swal('Gagal...', 'Tambah Gagal', 'error');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_ap">';
        }
    }
    ?>