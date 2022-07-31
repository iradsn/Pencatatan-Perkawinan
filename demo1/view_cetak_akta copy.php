<?php include '../konek.php'; ?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<?php
if (isset($_GET['id_request_akta'])) {
    $id = $_GET['id_request_akta'];
    $sql = "SELECT * FROM data_request_akta natural join data_user WHERE id_request_akta='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $id = $data['id_request_akta'];
    $nik = $data['nik'];
    $nama = $data['nama'];
    $tempat = $data['tempat_lahir'];
    $tgl = $data['tanggal_lahir'];
    $tgl2 = $data['tanggal_request'];
    $format1 = date('Y', strtotime($tgl2));
    $format2 = date('d-m-Y', strtotime($tgl));
    $format3 = date('d F Y', strtotime($tgl2));
    $agama = $data['agama'];
    $jekel = $data['jekel'];
    $alamat = $data['alamat'];
    $status_warga = $data['status_warga'];
    $niksuami = $data['niksuami'];
    $nikistri = $data['nikistri'];
    $tempat = $data['tempat'];
    $tanggal = $data['tanggal'];
    $bulan = $data['bulan'];
    $tahun = $data['tahun'];
    $namasuami = $data['namasuami'];
    $namaistri = $data['namaistri'];
    $nama_pemuka_agama = $data['nama_pemuka_agama'];

    $keterangan = $data['keterangan'];
    $status = $data['status'];
    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));
    if ($format4 == 0) {
        $format4 = "kosong";
    } elseif ($format4 == 1) {
        $format4;
    }

    if ($status == 3) {
        $keterangan = "Sudah ACC Lurah, surat sedang dalam proses cetak oleh staf";
    }
}
?>
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold"></h2>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-tools">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Keterangan</label>
                                <select name="dicetak" id="" class="form-control" required="">
                                    <option value="">Pilih</option>
                                    <option value="Akta dicetak, bisa diambil!">Akta dicetak! bisa diambil ke loket Pencatatan Sipil</option>
                                </select><br>
                                <b>File Upload</b> <br><br>
                                <input type="file" name="NamaFile"><br><br>
                                <!-- <input type="date" name="tgl_acc" class="form-control"> -->
                                <input type="submit" name="ttd" value="Upload" class="btn btn-primary btn-sm">
                                <a href="cetak_akta.php?id_request_akta=<?= $id; ?>" class="btn btn-primary btn-sm">Cetak</a>
                                <!-- <div class="form-group">
                                                    <a href="cetak_skd.php?id_request_skd=<?php $id; ?>">
                                                        Cetak
                                                    </a>
                                                </div> -->
                                <!-- <div class="form-group">
                                                   <a href="cetak_skd.php?id_request_skd=<?= $id; ?>">a</a>
                                                </div> -->
                            </div>
                        </form>
                        <?php
                        if (isset($_POST['ttd'])) {
                            $cetak = $_POST['dicetak'];
                            $direktori = "../dataFoto/berkas/";
                            $file_name = $_FILES['NamaFile']['name'];
                            move_uploaded_file($_FILES['NamaFile']['tmp_name'], $direktori . $file_name);
                            $update = mysqli_query($konek, "UPDATE data_request_akta SET berkas='$file_name', keterangan='$cetak', status=3 WHERE id_request_akta=$id");
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <left>

                                <font size="4"><u><b>Nomor Induk Kependudukan</b></u><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<?php echo $niksuami; ?></b></font><br>

                            </left>

                        </td>

                        <td>
                            <left><i>
                                    <font size="4">Personel Registration Number</font><br>
                                </i></left>
                        </td>
                        <br>
                        <td>
                            <center><img src="img/garuda.png" width="96" height="88" alt=""></center>
                        </td>

                        <br>
                        <td>
                            <center>
                                <font size="4.5"><B>REPUBLIK INDONESIA</B></font><br>
                            </center>
                        </td>
                        <br>
                        <br>
                        <td>
                            <center>
                                <font size="4.5"><u><B>PENCATATAN SIPIL</B></u></font><br>
                            </center>
                        </td>
                        <br>
                        <br>
                        <td>
                            <center>
                                <font size="4.5"><u><B>WARGA NEGARA SUAMI INDONESIA</B></u></font><br>
                            </center>
                        </td>
                        <br>
                        <td>
                            <center>
                                <font size="4.5"><u><B>WARGA NEGARA ISTRI INDONESIA</B></u></font><br>
                            </center>
                        </td>
                        <br>
                        <br>
                        <td>
                            <center>
                                <font size="4.5"><u><B>KUTIPAN AKTA PERKAWINAN</B></u></font><br>
                            </center>
                        </td>
                        <br>
                        <br>
                        <td>
                            <left>
                                <font size="4"><u>Berdasarkan Akta Perkawinan Nomor</u><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $id; ?></b></font><br>
                            </left>
                        </td>
                        <td>
                            <left>
                                <font size="4"><u>Bahwa di</u><b>&nbsp;&nbsp;<?php echo $tempat; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>pada tanggal</u><b>&nbsp;&nbsp;<?php echo $tanggal; ?></b></font><br>
                            </left>
                        </td>
                        <td>
                        </td>
                        <font size="4"><B><?php echo $bulan; ?></B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>tahun</u>&nbsp;&nbsp;<b><?php echo $tahun; ?></b>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>telah tercatat perkawinan antara</u></font><br>
                        <br>
                        <td>
                            <center>
                                <font size="4"><B><?php echo $namasuami; ?></B></font>
                            </center>
                        </td>
                        <td>
                            <center>
                                <font size="4">dengan</font>
                            </center>
                        </td>
                        <td>
                            <center>
                                <font size="4"><B><?php echo $namaistri; ?></B></font>
                            </center><br>
                        </td>
                        <td>
                            <left>
                                <font size="4"><u>yang telah dilangsungkan dihadapan Pemuka Agama</u>&nbsp;&nbsp;<b><?php echo $agama; ?></b><br>

                            </left>
                            <left>
                                <font size="4"><u>yang bernama</u>&nbsp;&nbsp;</u><b><?php echo $nama_pemuka_agama; ?></b><br>

                            </left>
                            <left>
                                <font size="4"><u>pada tanggal</u>&nbsp;&nbsp;</u><b><?php echo $tanggal; ?>&nbsp;<?php echo $bulan; ?></b><br>

                            </left>
                        </td>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <td>

                            <font size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kutipan ini dikeluarkan di <b>BANJARBARU</b></font><br>

                        </td>
                        <td>

                            <font size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pada tanggal <b><?php echo $acc; ?></b></font><br>

                        </td>
                        <td>

                            <font size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tahun <b>DUA RIBU DUA PULUH DUA</b></font><br>

                        </td>
                        <td>

                            <left>
                                <font size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pejabat Pencatatan Sipil<b>KOTA BANJARBARU</b></font><br>
                            </left>

                        </td>
                        <td>
                            <center><img src="img/frame.png" width="120" height="120" alt=""></center>
                        </td>
                        <td>
                            <font size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Dra. Hj. SRI FATMA KARMAILITA, MM</u></b></font><br>
                        </td>
                        <td>
                            <font size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>NIP. 196405121985032010</b></font><br>
                        </td>
                        <td></td>
                    </tr>
                    <tr>


                        </table>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
</div>


</tr>