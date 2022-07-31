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
                        <div class="card-title">FORM TAMBAH PENDING</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Nama Mempelai Pria</label>
                                    <input type="text" name="mempelai_pria" class="form-control" placeholder="Nama Mempelai Pria" onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group">
                                    <label>Nama Mempelai Wanita</label>
                                    <input type="text" name="mempelai_wanita" class="form-control" placeholder="Nama Mempelai Wanita" onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan Pending</label>
                                    <input type="text" name="alasan_pending" class="form-control" placeholder="keterangan Pending.." onkeyup="this.value = this.value.toUpperCase()">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button name="simpan" class="btn btn-success btn-sm">Simpan</button>
                        <a href="?halaman=tampil_pending" class="btn btn-default btn-sm">Batal</a>

                    </div>
                </div>
        </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['simpan'])) {
    $mempelai_pria = $_POST['mempelai_pria'];
    $mempelai_wanita = $_POST['mempelai_wanita'];
    $alasan_pending = $_POST['alasan_pending'];

    $sql = "INSERT INTO data_pending (mempelai_pria,mempelai_wanita,alasan_pending) VALUES ('$mempelai_pria','$mempelai_wanita','$alasan_pending')";
    $query = mysqli_query($konek, $sql);
    if ($query) {
        echo "<script language='javascript'>swal('Selamat...', 'Tambah Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_pending">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Tambah Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_pending">';
    }
}
?>