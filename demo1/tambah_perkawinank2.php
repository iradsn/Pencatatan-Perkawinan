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
                        <div class="card-title">FORM TAMBAH DATA PERKAWINAN KUTIPAN KEDUA</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Data Benar</label>
                                        <input type="text" name="data_benar" class="form-control" placeholder="Data yang benar" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                    <div class="form-group">
                                        <label>Data Salah</label>
                                        <input type="text" name="data_salah" class="form-control" placeholder="Data yang salah" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Suami - Nama Istri</label>
                                        <select name="id_request_akta" class="form-control input-border-bottom">
                                            <option>Pilih Nama Suami & Istri</option>
                                            <option></option>
                                            <?php
                                            $query = mysqli_query($konek, "SELECT * FROM data_request_akta") or die(mysqli_error($konek));
                                            while ($data = mysqli_fetch_array($query)) {
                                                echo "<option value=$data[id_request_akta]> $data[namasuami] - $data[namaistri] </option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button name="simpan" class="btn btn-success btn-sm">Simpan</button>
                            <a href="?halaman=tampil_perkawinank2" class="btn btn-default btn-sm">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['simpan'])) {

        mysqli_query($konek, "insert into data_k2_aktaperkawinan set

        data_benar = '$_POST[data_benar]',
        data_salah = '$_POST[data_salah]',
        id_request_akta = '$_POST[id_request_akta]'") or die(mysqli_error($konek));

        if ($query) {
            echo "<script language='javascript'>swal('Selamat...', 'Tambah Berhasil', 'success');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_perkawinank2">';
        } else {
            echo "<script language='javascript'>swal('Gagal...', 'Tambah Gagal', 'error');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_perkawinank2">';
        }
    }
    ?>