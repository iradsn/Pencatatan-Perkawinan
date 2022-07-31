
<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L', 'mm', array(297, 210));
// membuat halaman baru
$pdf->AddPage();


$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(125);
$pdf->Image('img/bjb.png', 30, 25, 20, 20);
$pdf->Cell(20, 7, '', 0, 1);
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
$pdf->Cell(30, 7, 'Laporan Pending Perubahan Akta Kelahiran', 0, 1, 'C');




// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFillColor(255, 255, 255);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(7, 6, 'NO', 1, 0, 'C');
$pdf->Cell(75, 6, 'NO. AKTA', 1, 0, 'C');
$pdf->Cell(90, 6, 'NAMA', 1, 0, 'C');
$pdf->Cell(100, 6, 'KETERANGAN PENDING/DITOLAK', 1, 1, 'C');

$pdf->SetFont('Arial', '', 10);

include '../konek.php';
$no = 1;
$tampil = "SELECT * FROM data_pending";
$query = mysqli_query($konek, $tampil);
while ($data = mysqli_fetch_array($query, MYSQLI_BOTH)) {
    $no_akta = $data['no_akta'];
    $nama = $data['nama'];
    $alasan_pending = $data['alasan_pending'];

    $pdf->Cell(7, 6, $no++, 1, 0, 'C');
    $pdf->Cell(75, 6, $data['no_akta'], 1, 0);
    $pdf->Cell(90, 6, $data['nama'], 1, 0);
    $pdf->Cell(100, 6, $data['alasan_pending'], 1, 1);
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
