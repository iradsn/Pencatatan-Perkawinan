<!-- 
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 

<?php

include '../konek.php';


if (isset($_GET['id_akta_kelahiran'])) {
    $id_akta_kelahiran = $_GET['id_akta_kelahiran'];
    $sql = mysqli_query($konek, "SELECT * from data_pengesahan_anak,data_akta_kelahiran where 
data_pengesahan_anak.id_akta_kelahiran=data_akta_kelahiran.id_akta_kelahiran and data_akta_kelahiran.id_akta_kelahiran='$_GET[id_akta_kelahiran]'");
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($sql);
    $tanggal_pemberkatan = $data['$tanggal_pemberkatan'];
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
                        <div class="card-title">FORM UBAH DATA AKTA PENGESAHAN ANAK</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>No. Akta Perkawinan Orang Tua</label>
                                            <input type="text" name="id_akta_kelahiran" class="form-control" onkeyup="this.value = this.value.toUpperCase()" value="<?= $id_akta_kelahiran; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Pemberkatan</label>
                                            <input type="date" name="tanggal_pemberkatan" class="form-control" value="<?= $tanggal_pemberkatan; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Anak & Tanggal Lahir</label>
                                            <select name="id_akta_kelahiran" class="form-control input-border-bottom">
                                                <?php
                                                echo "<option value=$data[id_akta_kelahiran]> $data[nama] - $data[tanggal_lahir] </option>";
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



                        </div>
                        <div class="card-action">
                            <button name="ubah" value="update" class="btn btn-success">Ubah</button>
                            <a href="?halaman=tampil_ap" class="btn btn-default">Batal</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['ubah'])) {

        mysqli_query($konek, "UPDATE data_pengesahan_anak set
    
   tanggal_pemberkatan = '$_POST[tanggal_pemberkatan]',
   id_akta_kelahiran = '$_POST[id_akta_kelahiran]' where id_akta_kelahiran='$_GET[id_akta_kelahiran]'") or die(mysqli_error($konek));


        if ($query) {
            echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_ap">';
        } else {
            echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_ap">';
        }
    }

    ?>