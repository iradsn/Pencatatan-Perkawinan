
<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P', 'mm', 'A4');
// membuat halaman baru
$pdf->AddPage();


$pdf->SetFont('Arial', 'B', 14);
$pdf->Image('img/bjb.png', 20, 25, 20, 20);
$pdf->Cell(10, 7, '', 0, 1);
$pdf->Cell(10, 7, '', 0, 1);


// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string 
$pdf->Cell(190, 7, 'Dinas Kependududkan dan Pencatatan Sipil', 0, 1, 'C');
$pdf->Cell(190, 7, 'Kota Banjarbaru', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'Laporan Pending Kutipan Kedua Akta Kelahiran', 0, 1, 'C');



// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFillColor(255, 255, 255);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(85, 6, 'No. Akta', 1, 0,);
$pdf->Cell(27, 6, 'Nama', 1, 0);
$pdf->Cell(50, 6, 'Keterangan pending', 1, 1);

$pdf->SetFont('Arial', '', 10);

include '../konek.php';

$tampil = "SELECT * FROM data_pending";
$query = mysqli_query($konek, $tampil);
while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
    $no_akta = $data['no_akta'];
    $nama = $data['nama'];
    $alasan_pending = $data['alasan_pending'];


    $pdf->Cell(85, 6, $data['no_akta'], 1, 0);
    $pdf->Cell(27, 6, $data['nama'], 1, 0);
    $pdf->Cell(50, 6, $data['alasan_pending'], 1, 1);
}

$pdf->Output();
