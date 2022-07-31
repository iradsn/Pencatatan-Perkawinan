<!-- 
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 

<?php
include '../konek.php';

$sql = mysqli_query($konek, "SELECT * from data_k2_aktaperkawinan,data_request_akta where 
data_k2_aktaperkawinan.id_request_akta=data_request_akta.id_request_akta and id_request_akta='$_GET[id_request_akta]'");
$data = mysqli_fetch_array($sql);



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
                        <div class="card-title">FORM TAMBAH KEABSAHAN</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>No. Akta Perkawinan</label>
                                            <input type="text" name="id_request_akta" class="form-control" onkeyup="this.value = this.value.toUpperCase()" value="<?php echo $data['id_request_akta']; ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Data Benar</label>
                                            <input type="text" name="data_benar" class="form-control" onkeyup="this.value = this.value.toUpperCase()" value="<?php echo $data['data_benar']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Data Salah</label>
                                            <input type="text" name="data_salah" class="form-control" onkeyup="this.value = this.value.toUpperCase()" value="<?php echo $data['data_salah']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <select name="id_request_akta">
                                                <?php
                                                echo "<option value=$data[id_request_akta]> $data[namasuami] - $data[namaistri] </option>";
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
                                <button name="ubah" value="update" class="btn btn-success">Ubah</button>
                                <a href="?halaman=tampil_keabsahan" class="btn btn-default">Batal</a>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['ubah'])) {

        mysqli_query($konek, "UPDATE data_k2_aktaperkawinan set
    
   data_benar = '$_POST[data_benar]',
   data_salah = '$_POST[data_salah]',
   id_request_akta = '$_POST[id_request_akta]' where id_request_akta='$_GET[id_request_akta]'") or die(mysqli_error($konek));


        if ($query) {
            echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_keabsahan">';
        } else {
            echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_keabsahan">';
        }
    }

    ?>