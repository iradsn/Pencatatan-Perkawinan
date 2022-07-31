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
                        <div class="card-title">FORM TAMBAH PEGAWAI</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label>Nama Pegawai</label>
                                    <input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai..." onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group">
                                    <label>NIP</label>
                                    <input type="text" name="nip" class="form-control" placeholder="NIP..." onkeyup="this.value = this.value.toUpperCase()">
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
                                    <input type="text" name="unit_kerja" class="form-control" placeholder="Unit Kerja..." onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group">
                                    <label>jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" placeholder="Jabatan..." onkeyup="this.value = this.value.toUpperCase()">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button name="simpan" class="btn btn-success btn-sm">Simpan</button>
                        <a href="?halaman=tampil_pegawai" class="btn btn-default btn-sm">Batal</a>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['simpan'])) {
    $nama_pegawai = $_POST['nama_pegawai'];
    $nip = $_POST['nip'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $unit_kerja = $_POST['unit_kerja'];
    $jabatan = $_POST['jabatan'];

    $sql = "INSERT INTO data_pegawai (nama_pegawai,nip,jenis_kelamin,unit_kerja,jabatan) VALUES ('$nama_pegawai','$nip','$jenis_kelamin','$unit_kerja','$jabatan')";
    $query = mysqli_query($konek, $sql);
}
?>