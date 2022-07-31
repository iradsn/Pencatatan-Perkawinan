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
                        <div class="card-title">FORM TAMBAH CERAI</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <!--  <div class="form-group">
                                    <label>No Akta</label>
                                    <input type="text" name="id_akta_perceraian" class="form-control" placeholder="No. Akta Perceraian" onkeyup="this.value = this.value.toUpperCase()">
                                </div> -->
                                <div class="form-group">
                                    <label>Nama Bekas Suami</label>
                                    <input type="text" name="nama_bekas_suami" class="form-control" placeholder="Nama Bekas Suami" onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group">
                                    <label>Nama Bekas Istri</label>
                                    <input type="text" name="nama_bekas_istri" class="form-control" placeholder="Nama Bekas Istri" onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Perkawinan</label>
                                    <input type="date" name="tanggal_perkawinan" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Perceraian</label>
                                    <input type="date" name="tanggal_cerai" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
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
    $id_akta_perceraian = $_POST['id_akta_perceraian'];
    $nama_bekas_suami = $_POST['nama_bekas_suami'];
    $nama_bekas_istri = $_POST['nama_bekas_istri'];
    $tanggal_perkawinan = $_POST['tanggal_perkawinan'];
    $tanggal_cerai = $_POST['tanggal_cerai'];

    $sql = "INSERT INTO data_akta_perceraian (id_akta_perceraian,nama_bekas_suami,nama_bekas_istri,tanggal_perkawinan,tanggal_cerai) VALUES ('$id_akta_perceraian','$nama_bekas_suami','$nama_bekas_istri','$tanggal_perkawinan','$tanggal_cerai')";
    $query = mysqli_query($konek, $sql);

    if ($query) {
        echo "<script language='javascript'>swal('Selamat...', 'Tambah Berhasil', 'success');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_cerai">';
    } else {
        echo "<script language='javascript'>swal('Gagal...', 'Tambah Gagal', 'error');</script>";
        echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_cerai">';
    }
}
?>