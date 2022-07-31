<?php include '../konek.php'; ?>
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

    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK AKTA</title>
</head>

<body>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <tr>


                        <td>
                            <left>

                                <font size="3"><u><b>Nomor Induk Kependudukan</b></u><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<?php echo $niksuami; ?></b></font><br>

                            </left>

                        </td>


                        <td>
                            <left><i>
                                    <font size="3">Personel Registration Number</font><br>
                                </i></left>
                        </td>
                        <td>
                            <font size="3">
                                <p align=right><b>SUAMI</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </font>

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
                        <td>
                            <center>
                                <font size="4.5"><u><B>PENCATATAN SIPIL</B></u></font><br>
                                <font size="4.5"><i>REGISTRY OFFICE</i></font><br>
                            </center>
                        </td>
                        <br>
                        <td>
                            <center>
                                <font size="4.5"><u><B>WARGA NEGARA SUAMI INDONESIA</B></u></font><br>
                                <font size="4.5"><i>HUSBAND NATIONALITY INDONESIA</i></font><br>
                            </center>
                        </td>
                        <br>
                        <td>
                            <center>
                                <font size="4.5"><u><B>WARGA NEGARA ISTRI INDONESIA</B></u></font><br>
                                <font size="4.5"><i>WIFE NATIONALITY INDONESIA</i></font><br>
                            </center>
                        </td>
                        <br>
                        <td>
                            <center>
                                <font size="4.5"><u><B>KUTIPAN AKTA PERKAWINAN</B></u></font><br>
                                <font size="4.5"><i>EXCERPT OF MARRIAGE CERTIFICATE</i></font><br>
                            </center>
                        </td>
                        <br>

                        <td>
                            <left>
                                <font size="3"><b><u>Berdasarkan Akta Perkawinan Nomor :</u></b><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $id; ?></b></font><br>
                                <font size="3"><i>By virtue of Marriage Certificate Number </i><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font><br>

                            </left>
                        </td>

                        <td>
                            <left>
                                <font size="3"><b><u>Bahwa di</u></b><b>&nbsp;&nbsp;<?php echo $tempat; ?></b>&nbsp;&nbsp;&nbsp;<b><u>pada tanggal</u></b><b>&nbsp;&nbsp;<?php echo $acc; ?></b></font><br>
                                <font size="3"><i>That in</i>&nbsp;&nbsp;<i><?php echo $tempat; ?></i>&nbsp;&nbsp;&nbsp;<i>on date</i>&nbsp;&nbsp;<i><?php echo $acc; ?></i></font><br>
                            </left>
                        </td>

                        <td>
                        </td>
                        <font size="3"><b><u>Telah tercatat perkawinan antara</u></b></font><br>
                        <font size="3"><i>A marriage was recorded between</i></font><br>
                        <br>
                        <td>
                            <center>
                                <font size="4"><B><?php echo $namasuami; ?></B></font>
                            </center>
                        </td>
                        <td>
                            <center>
                                <font size="3"><b><u>dengan</u></b></font><br>
                                <font size="3"><i>with</i></font><br>
                            </center>
                        </td>
                        <td>
                            <center>
                                <font size="4"><B><?php echo $namaistri; ?></B></font>
                            </center><br>
                        </td>
                        <td>
                            <left>
                                <font size="3"><b><u>Yang telah dilangsungkan dihadapan Pemuka Agama</u></b>&nbsp;&nbsp;&nbsp;<b><?php echo $agama; ?></b><br>
                                    <font size="3"><i>Which is conducted before a clergyman</i>&nbsp;&nbsp;&nbsp;<b><?php echo $agama; ?></b><br>

                            </left>

                            <left>
                                <font size="3"><b><u>Yang bernama</u></b>&nbsp;&nbsp;</u><b><?php echo $nama_pemuka_agama; ?></b><br>
                                    <font size="3"><i>By name</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></b><br>
                            </left>

                            <left>
                                <font size="3"><b><u>Pada tanggal</u>&nbsp;&nbsp;</u></b><b><?php echo $tanggal; ?></b><br>
                                    <font size="3"><i>On date</i>&nbsp;&nbsp;</u><b></b><br>

                            </left>

                        </td>

                        <br>
                        <br>
                        <td>

                            <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kutipan ini dikeluarkan di <b>BANJARBARU</b></font><br>

                        </td>
                        <td>

                            <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pada tanggal <b><?php echo $acc; ?></b></font><br>

                        </td>
                        <td>

                            <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tahun <b>DUA RIBU DUA PULUH DUA</b></font><br>

                        </td>
                        <td>

                            <left>
                                <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pejabat Pencatatan Sipil <b>KOTA BANJARBARU</b></font><br>
                            </left>

                        </td>
                        <td>
                            <center>
                                <?php
                                $kode = "pt.disdukcapil/" . $data['id_request_akta'] . "/" . $data['namasuami'] . "/" . $data['namaistri'] . "";
                                require_once('../dataFoto/phpqrcode/qrlib.php');
                                QRcode::png("$kode", "kode" . $id . ".png", "M", 5, 5);
                                ?>
                                <img src="kode<?php $id ?>.png" alt="">
                            </center>
                        </td>
                        <td>
                            <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Dra. Hj. SRI FATMA KARMAILITA, MM</u></b></font><br>
                        </td>
                        <td>
                            <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <tr>


                        <td>
                            <left>

                                <font size="3"><u><b>Nomor Induk Kependudukan</b></u><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;<?php echo $nikistri; ?></b></font><br>

                            </left>

                        </td>


                        <td>
                            <left><i>
                                    <font size="3">Personel Registration Number</font><br>
                                </i></left>
                        </td>
                        <td>
                            <font size="3">
                                <p align=right><b>ISTRI</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </font>

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
                        <td>
                            <center>
                                <font size="4.5"><u><B>PENCATATAN SIPIL</B></u></font><br>
                                <font size="4.5"><i>REGISTRY OFFICE</i></font><br>
                            </center>
                        </td>
                        <br>
                        <td>
                            <center>
                                <font size="4.5"><u><B>WARGA NEGARA SUAMI INDONESIA</B></u></font><br>
                                <font size="4.5"><i>HUSBAND NATIONALITY INDONESIA</i></font><br>
                            </center>
                        </td>
                        <br>
                        <td>
                            <center>
                                <font size="4.5"><u><B>WARGA NEGARA ISTRI INDONESIA</B></u></font><br>
                                <font size="4.5"><i>WIFE NATIONALITY INDONESIA</i></font><br>
                            </center>
                        </td>
                        <br>
                        <td>
                            <center>
                                <font size="4.5"><u><B>KUTIPAN AKTA PERKAWINAN</B></u></font><br>
                                <font size="4.5"><i>EXCERPT OF MARRIAGE CERTIFICATE</i></font><br>
                            </center>
                        </td>
                        <br>

                        <td>
                            <left>
                                <font size="3"><b><u>Berdasarkan Akta Perkawinan Nomor :</u></b><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $id; ?></b></font><br>
                                <font size="3"><i>By virtue of Marriage Certificate Number </i><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font><br>

                            </left>
                        </td>

                        <td>
                            <left>
                                <font size="3"><b><u>Bahwa di</u></b><b>&nbsp;&nbsp;<?php echo $tempat; ?></b>&nbsp;&nbsp;&nbsp;<b><u>pada tanggal</u></b><b>&nbsp;&nbsp;<?php echo $acc; ?></b></font><br>
                                <font size="3"><i>That in</i>&nbsp;&nbsp;<i><?php echo $tempat; ?></i>&nbsp;&nbsp;&nbsp;<i>on date</i>&nbsp;&nbsp;<i><?php echo $acc; ?></i></font><br>
                            </left>
                        </td>

                        <td>
                        </td>
                        <font size="3"><b><u>Telah tercatat perkawinan antara</u></b></font><br>
                        <font size="3"><i>A marriage was recorded between</i></font><br>
                        <br>
                        <td>
                            <center>
                                <font size="4"><B><?php echo $namasuami; ?></B></font>
                            </center>
                        </td>
                        <td>
                            <center>
                                <font size="3"><b><u>dengan</u></b></font><br>
                                <font size="3"><i>with</i></font><br>
                            </center>
                        </td>
                        <td>
                            <center>
                                <font size="4"><B><?php echo $namaistri; ?></B></font>
                            </center><br>
                        </td>
                        <td>
                            <left>
                                <font size="3"><b><u>Yang telah dilangsungkan dihadapan Pemuka Agama</u></b>&nbsp;&nbsp;&nbsp;<b><?php echo $agama; ?></b><br>
                                    <font size="3"><i>Which is conducted before a clergyman</i>&nbsp;&nbsp;&nbsp;<b><?php echo $agama; ?></b><br>

                            </left>

                            <left>
                                <font size="3"><b><u>Yang bernama</u></b>&nbsp;&nbsp;</u><b><?php echo $nama_pemuka_agama; ?></b><br>
                                    <font size="3"><i>By name</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></b><br>
                            </left>

                            <left>
                                <font size="3"><b><u>Pada tanggal</u>&nbsp;&nbsp;</u></b><b><?php echo $tanggal; ?></b><br>
                                    <font size="3"><i>On date</i>&nbsp;&nbsp;</u><b></b><br>

                            </left>

                        </td>

                        <br>
                        <br>
                        <td>

                            <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kutipan ini dikeluarkan di <b>BANJARBARU</b></font><br>

                        </td>
                        <td>

                            <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pada tanggal <b><?php echo $acc; ?></b></font><br>

                        </td>
                        <td>

                            <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tahun <b>DUA RIBU DUA PULUH DUA</b></font><br>

                        </td>
                        <td>

                            <left>
                                <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pejabat Pencatatan Sipil <b>KOTA BANJARBARU</b></font><br>
                            </left>

                        </td>
                        <td>
                            <center>
                                <?php
                                $kode = "pt.disdukcapil/" . $data['id_request_akta'] . "/" . $data['namasuami'] . "/" . $data['namaistri'] . "";
                                require_once('../dataFoto/phpqrcode/qrlib.php');
                                QRcode::png("$kode", "kode" . $id . ".png", "M", 5, 5);
                                ?>
                                <img src="kode<?php $id ?>.png" alt="">
                            </center>
                        </td>
                        <td>
                            <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Dra. Hj. SRI FATMA KARMAILITA, MM</u></b></font><br>
                        </td>
                        <td>
                            <font size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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

</body>

</html>
<script>
    window.print();
</script>