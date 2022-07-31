<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_akta_perceraian'])) {
    $id_akta_perceraian = $_GET['id_akta_perceraian'];
    $sql = "SELECT * FROM data_akta_perceraian WHERE id_akta_perceraian='$id_akta_perceraian'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $nama_bekas_suami = $data['nama_bekas_suami'];
    $nama_bekas_istri = $data['nama_bekas_istri'];
    $tanggal_perkawinan = $data['tanggal_perkawinan'];
    $tanggal_cerai = $data['tanggal_cerai'];
}
?>






<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <form method="POST">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">UBAH AKTA PERCERAIAN</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>No. Akta</label>
                                    <input type="text" name="id_akta_perceraian" class="form-control" value="<?= $id_akta_perceraian; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Nama Bekas Suami</label>
                                    <input type="text" name="nama_bekas_suami" class="form-control" value="<?= $nama_bekas_suami; ?>" onkeyup="this.value = this.value.toUpperCase()">
                                </div>

                                <div class="form-group">
                                    <label>Nama Bekas Istri</label>
                                    <input type="text" name="nama_bekas_istri" class="form-control" value="<?= $nama_bekas_istri; ?>" onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Perkawinan</label>
                                    <input type="date" name="tanggal_perkawinan" class="form-control" value="<?= $tanggal_perkawinan; ?>" onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Perceraian</label>
                                    <input type="date" name="tanggal_cerai" class="form-control" value="<?= $tanggal_cerai; ?>" onkeyup="this.value = this.value.toUpperCase()">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button name="ubah" class="btn btn-success">Ubah</button>
                        <a href="?halaman=tampil_pending" class="btn btn-default">Batal</a>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['ubah'])) {
    $id_akta_perceraian = $_POST['id_akta_perceraian'];
    $nama_bekas_suami = $_POST['nama_bekas_suami'];
    $nama_bekas_istri = $_POST['nama_bekas_istri'];
    $tanggal_perkawinan = $_POST['tanggal_perkawinan'];
    $tanggal_cerai = $_POST['tanggal_cerai'];

    include '../konek.php';


    $sql = "UPDATE data_akta_perceraian SET nama_bekas_suami='$nama_bekas_suami', nama_bekas_istri='$nama_bekas_istri', tanggal_perkawinan='$tanggal_perkawinan', tanggal_cerai='$tanggal_cerai' WHERE id_akta_perceraian='$id_akta_perceraian'";
    $query = mysqli_query($konek, $sql);



    if ($query) {
        echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_cerai">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_cerai">';
    }
}

?>