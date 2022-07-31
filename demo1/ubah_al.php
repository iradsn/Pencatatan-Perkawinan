<!-- <?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
if (isset($_GET['id_akta_kelahiran'])) {
    $id_akta_kelahiran = $_GET['id_akta_kelahiran'];
    $sql = "SELECT * FROM data_akta_kelahiran WHERE id_akta_kelahiran='$id_akta_kelahiran'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $nama = $data['nama'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $nama_ayah = $data['nama_ayah'];
    $nama_ibu = $data['nama_ibu'];
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
                        <div class="card-title">UBAH AKTA KELAHIRAN ANAK</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>No. Akta</label>
                                    <input type="text" name="id_akta_kelahiran" class="form-control" value="<?= $id_akta_kelahiran; ?>" onkeyup="this.value = this.value.toUpperCase()" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $nama; ?>" onkeyup="this.value = this.value.toUpperCase()">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" value="<?= $tanggal_lahir; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama Ayah</label>
                                    <input type="text" name="nama_ayah" class="form-control" value="<?= $nama_ayah; ?>" onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group">
                                    <label>Nama Ibu</label>
                                    <input type="text" name="nama_ibu" class="form-control" value="<?= $nama_ibu; ?>" onkeyup="this.value = this.value.toUpperCase()">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button name="ubah" class="btn btn-success">Ubah</button>
                        <a href="?halaman=tampil_al" class="btn btn-default">Batal</a>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['ubah'])) {
    $id_akta_kelahiran = $_POST['id_akta_kelahiran'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nama_ayah = $_POST['nama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];

    include '../konek.php';


    $sql = "UPDATE data_akta_kelahiran SET nama='$nama', tanggal_lahir='$tanggal_lahir', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu' WHERE id_akta_kelahiran='$id_akta_kelahiran'";
    $query = mysqli_query($konek, $sql);



    if ($query) {
        echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_al">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_al">';
    }
}

?>