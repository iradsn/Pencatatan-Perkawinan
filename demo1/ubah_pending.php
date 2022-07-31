<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['mempelai_pria'])) {
    $mempelai_pria = $_GET['mempelai_pria'];
    $sql = "SELECT * FROM data_pending WHERE mempelai_pria='$mempelai_pria'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $mempelai_wanita = $data['mempelai_wanita'];
    $alasan_pending = $data['alasan_pending'];
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
                        <div class="card-title">UBAH PENDING</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Nama Mempelai Pria</label>
                                    <input type="text" name="mempelai_pria" class="form-control" value="<?= $mempelai_pria; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama Mempelai Wanita</label>
                                    <input type="text" name="mempelai_wanita" class="form-control" value="<?= $mempelai_wanita; ?>" onkeyup="this.value = this.value.toUpperCase()">
                                </div>

                                <div class="form-group">
                                    <label>Alasan Pending/Ditolak</label>
                                    <input type="text" name="alasan_pending" class="form-control" value="<?= $alasan_pending; ?>" onkeyup="this.value = this.value.toUpperCase()">
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
    $mempelai_pria = $_POST['mempelai_pria'];
    $mempelai_wanita = $_POST['mempelai_wanita'];
    $alasan_pending = $_POST['alasan_pending'];

    include '../konek.php';


    $sql = "UPDATE data_pending SET mempelai_wanita='$mempelai_wanita', alasan_pending='$alasan_pending' WHERE mempelai_pria='$mempelai_pria'";
    $query = mysqli_query($konek, $sql);



    if ($query) {
        echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_pending">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_pending">';
    }
}

?>