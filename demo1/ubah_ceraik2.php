<!-- 
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 

<?php

include '../konek.php';


if (isset($_GET['id_akta_perceraian'])) {
    $id_akta_perceraian = $_GET['id_akta_perceraian'];
    $sql = mysqli_query($konek, "SELECT * from data_k2_aktaperceraian,data_akta_perceraian where 
data_k2_aktaperceraian.id_akta_perceraian=data_akta_perceraian.id_akta_perceraian and data_akta_perceraian.id_akta_perceraian='$_GET[id_akta_perceraian]'");
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($sql);
    $kesalahan_data = $data['kesalahan_data'];
    $pembetulan_data = $data['pembetulan_data'];
}


?>




?> -->


<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <form method="POST">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">FORM UBAH DATA PERCERAIAN KUTIPAN KEDUA</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>No. Akta Perkawinan</label>
                                            <input type="text" name="id_akta_perceraian" class="form-control" onkeyup="this.value = this.value.toUpperCase()" value="<?= $id_akta_perceraian; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Data Salah</label>
                                            <input type="text" name="kesalahan_data" class="form-control" value="<?= $kesalahan_data; ?>" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label>Data Salah</label>
                                            <input type="text" name="pembetulan_data" class="form-control" value="<?= $pembetulan_data; ?>" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>

                                        <div class="form-group">
                                            <label>Pasangan Bercerai</label>
                                            <select name="id_akta_perceraian" class="form-control input-border-bottom">
                                                <?php
                                                echo "<option value=$data[id_akta_perceraian]> $data[nama_bekas_suami] - $data[nama_bekas_istri] </option>";
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
                            <button name="ubah" value="update" class="btn btn-success">Ubah</button>
                            <a href="?halaman=tampil_ceraik2" class="btn btn-default">Batal</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['ubah'])) {

        mysqli_query($konek, "UPDATE data_k2_aktaperceraian set
    
   kesalahan_data = '$_POST[kesalahan_data]',
   pembetulan_data = '$_POST[pembetulan_data]',
   id_akta_perceraian = '$_POST[id_akta_perceraian]' where id_akta_perceraian='$_GET[id_akta_perceraian]'") or die(mysqli_error($konek));


        if ($query) {
            echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_ceraik2">';
        } else {
            echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_ceraik2">';
        }
    }

    ?>