
<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L', 'mm', array(297, 210));
// membuat halaman baru
$pdf->AddPage();


$pdf->SetFont('Arial', 'B', 14);
$pdf->Image('img/bjb.png', 20, 25, 20, 20);
$pdf->Cell(10, 7, '', 0, 1);
$pdf->Cell(10, 7, '', 0, 1);


// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string 
$pdf->Cell(125);
$pdf->Cell(30, 7, 'PEMERINTAH KOTA BANJARBARU', 0, 1, 'C');
$pdf->Cell(125);
$pdf->Cell(30, 7, 'DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(125);
$pdf->Cell(30, 7, 'Jl. Jendral Sudirman No.3, Banjarbaru, Kalimantan Selatan 70714', 0, 1, 'C');
$pdf->Cell(125);
$pdf->Cell(30, 7, 'Telepon: (0511) 4782013', 0, 1, 'C');

$pdf->Line(7, 55, 290, 55);
$pdf->Ln();

$pdf->Cell(125);
$pdf->Cell(30, 7, 'Laporan Akta Perkawinan', 0, 1, 'C');



// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFillColor(255, 255, 255);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(7, 6, 'NO', 1, 0, 'C');
$pdf->Cell(40, 6, 'TGL PERMOHONAN', 1, 0, 'C');
$pdf->Cell(35, 6, 'NO. AKTA', 1, 0, 'C');
$pdf->Cell(50, 6, 'NAMA SUAMI', 1, 0, 'C');
$pdf->Cell(60, 6, 'NAMA ISTRI', 1, 0, 'C');
$pdf->Cell(43, 6, 'TEMPAT MENIKAH', 1, 0, 'C');
$pdf->Cell(43, 6, 'NAMA PEMUKA AGAMA', 1, 1, 'C');

$pdf->SetFont('Arial', '', 10);

include '../konek.php';

$sql = "SELECT * FROM data_request_akta natural join data_user WHERE status=3";
$no = 1;
$query = mysqli_query($konek, $sql);
while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
    $tgl = $data['tanggal_request'];
    $format = date('d F Y', strtotime($tgl));
    $id_request_akta = $data['id_request_akta'];
    $namasuami = $data['namasuami'];
    $namaistri = $data['namaistri'];
    $tempat = $data['tempat'];
    $nama_pemuka_agama = $data['nama_pemuka_agama'];
    $status = $data['status'];
    if ($status == "1") {
        $status = "<b style='color:blue'>Sudah ACC Staf</b>";
    } elseif ($status == "0") {
        $status = "<b style='color:red'>BELUM ACC staf</b>";
    } elseif ($status == "3") {
        $status = "<b style='color:green'>AKTA SUDAH DICETAK</b>";
    }

    $pdf->Cell(7, 6, $no++, 1, 0, 'C');
    $pdf->Cell(40, 6, $data['tanggal_request'], 1, 0);
    $pdf->Cell(35, 6, $data['id_request_akta'], 1, 0);
    $pdf->Cell(50, 6, $data['namasuami'], 1, 0);
    $pdf->Cell(60, 6, $data['namaistri'], 1, 0);
    $pdf->Cell(43, 6, $data['tempat'], 1, 0);
    $pdf->Cell(43, 6, $data['nama_pemuka_agama'], 1, 1);
}
include '../konek.php';
$sql = "SELECT * FROM data_pegawai";
$query = mysqli_query($konek, $sql);
$data = mysqli_fetch_array($query, MYSQLI_BOTH);
$nama_pegawai = $data['nama_pegawai'];
$nip = $data['nip'];


$pdf->Ln();
$pdf->Ln();


$pdf->Cell(125);

$pdf->Cell(190, 5, 'KEPALA DINAS', 0, 1, 'C');
$pdf->Cell(125);
$pdf->Cell(190, 5, 'KEPENDUDUKAN DAN PENCATATAN SIPIL', 0, 1, 'C');
$pdf->Cell(125);
$pdf->Cell(190, 5, 'KOTA BANJARBARU', 0, 1, 'C');
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(125);

$pdf->Cell(190, 0, $data['nama_pegawai'], 0, 1, 'C');
$pdf->Cell(125);
$pdf->Cell(190, 5, '________________________________', 0, 1, 'C');
$pdf->Cell(202);
$pdf->Cell(5, 5, 'NIP.', 0, 0, 'C');
$pdf->Cell(40, 5, $data['nip'], 0, 0, 'C');


$pdf->Output();
