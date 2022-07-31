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
                        <div class="card-title">FORM TAMBAH DATA PERCERAIAN KUTIPAN KEDUA</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Data Salah Perceraian</label>
                                        <input type="text" name="kesalahan_data" class="form-control" onkeyup="this.value = this.value.toUpperCase()" placeholder="Data yang salah">
                                    </div>
                                    <div class="form-group">
                                        <label>Data Benar Perceraian</label>
                                        <input type="text" name="pembetulan_data" class="form-control" onkeyup="this.value = this.value.toUpperCase()" placeholder="Data yang benar">
                                    </div>
                                    <div class="form-group">
                                        <label>Pasangan Bercerai</label>
                                        <select name="id_akta_perceraian" class="form-control input-border-bottom">
                                            <option>Nama Pasangan Bercerai</option>
                                            <?php
                                            $query = mysqli_query($konek, "SELECT * FROM data_akta_perceraian") or die(mysqli_error($konek));
                                            while ($data = mysqli_fetch_array($query)) {
                                                echo "<option value=$data[id_akta_perceraian]> $data[nama_bekas_suami] - $data[nama_bekas_istri] </option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-action">
                        <button name="simpan" class="btn btn-success btn-sm">Simpan</button>
                        <a href="?halaman=tampil_ceraik2" class="btn btn-default btn-sm">Batal</a>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['simpan'])) {

        mysqli_query($konek, "insert into data_k2_aktaperceraian set

        kesalahan_data = '$_POST[kesalahan_data]',
        pembetulan_data = '$_POST[pembetulan_data]',
        id_akta_perceraian = '$_POST[id_akta_perceraian]'") or die(mysqli_error($konek));
        if ($query) {
            echo "<script language='javascript'>swal('Selamat...', 'Tambah Berhasil', 'success');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_ceraik2">';
        } else {
            echo "<script language='javascript'>swal('Gagal...', 'Tambah Gagal', 'error');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_ceraik2">';
        }
    }
    ?>