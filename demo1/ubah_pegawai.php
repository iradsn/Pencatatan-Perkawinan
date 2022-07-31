<!-- <?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
<?php
if (isset($_GET['nama_pegawai'])) {
    $nama_pegawai = $_GET['nama_pegawai'];
    $sql = "SELECT * FROM data_pegawai WHERE nama_pegawai='$nama_pegawai'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $nip = $data['nip'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $unit_kerja = $data['unit_kerja'];
    $jabatan = $data['jabatan'];
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
                        <div class="card-title">UBAH PEGAWAI</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input type="text" name="nip" class="form-control" onkeyup="this.value = this.value.toUpperCase()" value="<?= $nip; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Nama Pegawai</label>
                                    <input type="text" name="nama_pegawai" class="form-control" onkeyup="this.value = this.value.toUpperCase()" value="<?= $nama_pegawai; ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="" class="form-control" autofocus>
                                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                                        <option value="PEREMPUAN">PEREMPUAN</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Unit Kerja</label>
                                    <input type="text" name="unit_kerja" class="form-control" onkeyup="this.value = this.value.toUpperCase()" value="<?= $unit_kerja; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" onkeyup="this.value = this.value.toUpperCase()" value="<?= $jabatan; ?>">


                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button name="ubah" class="btn btn-success">Ubah</button>
                            <a href="?halaman=tampil_pegawai" class="btn btn-default">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['ubah'])) {
        $nama_pegawai = $_POST['nama_pegawai'];
        $nip = $_POST['nip'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $unit_kerja = $_POST['unit_kerja'];
        $jabatan = $_POST['jabatan'];
        include '../konek.php';


        $sql = "UPDATE data_pegawai SET nip='$nip', jenis_kelamin='$jenis_kelamin', unit_kerja='$unit_kerja' WHERE nama_pegawai='$nama_pegawai'";
        $query = mysqli_query($konek, $sql);



        if ($query) {
            echo "<script language='javascript'>swal('Selamat...', 'Ubah Berhasil', 'success');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=tampil_pegawai">';
        } else {
            echo "<script language='javascript'>swal('Gagal...', 'Ubah Gagal', 'error');</script>";
            echo '<meta http-equiv="refresh" content="3; url=?halaman=ubah_pegawai">';
        }
    }

    ?>