<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>DP3A Karawang</title>
    <link rel="shortcut icon" href="img/bg.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <body>
 <?php

require_once '../assets/pdf/fpdf.php';

$con = mysqli_connect("localhost","root","kinar!@#","p2tp2a");


$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetTitle('Biodata Laporan');
$pdf->Cell(35);
//$pdf->Image('img/bg.png',50,6,40);

$pdf->SetX(100);
$pdf->Image('../img/p2tp2a.jpeg',50,5,32,32);

$pdf->SetFont('Times','B',14);
$pdf->Cell(30,7,'',0,1,'C');
$pdf->SetY(10);
$pdf->Cell(50);
$pdf->Cell(160,7,'PUSAT PELAYANAN TERPADU',0,1,'C');
$pdf->Cell(10);
$pdf->Cell(245,7,'PEMBERDAYAAN PEREMPUAN DAN ANAK',0,1,'C');
$pdf->SetFont('Times','',12);
$pdf->Cell(260,5,'KABUPATEN KARAWANG',0,1,'C');
$pdf->SetX(80); 
$pdf->SetFont('Times','B',10);
$pdf->Cell(210,7,'Sekretariat : Komplek Islamic Center Al-Jihad - Telp.(0267) 8451683 - Karawang','0','1');


$pdf->SetLineWidth(1);
$pdf->Line(10,44,287,44);
$pdf->SetLineWidth(0);
$pdf->Line(10,45,287,45);
$pdf->SetY(15);
$pdf->SetFont('Arial','I',8);
//$pdf->Cell(0,10,'Page '.$pdf->PageNo().'/{nb}',0,0,'R');
//$pdf->AliasNbPages();


$pdf->Cell(10,40,'',0,1,'C');
$pdf->SetX(4); 
$pdf->SetFont('Times','B',10);
$pdf->Cell(10,6,'No',1,0,'C');
$pdf->Cell(35,6,'NIK',1,0,'C');
$pdf->Cell(40,6,'Nama',1,0,'C');
$pdf->Cell(20,6,'Umur',1,0,'C');
$pdf->Cell(24,6,'Jenis Kelamin',1,0,'C');
$pdf->Cell(65,6,'Alamat',1,0,'C');
$pdf->Cell(30,6,'Pendidikan',1,0,'C');
$pdf->Cell(25,6,'No.Telepon',1,0,'C');
$pdf->Cell(40,6,'Pekerjaan',1,0,'C');


$pdf->SetFont('Times','',10);

$sql = mysqli_query($con,"SELECT * from biodata order by nik");
$no = 1;
while($data = mysqli_fetch_array($sql)){
   $pdf->Ln();
   $pdf->SetX(4); 
   $pdf->Cell(10,6,$no,1,0,'C');
   $pdf->Cell(35,6,$data['nik'],1,0,'C');
   $pdf->Cell(40,6,$data['nama'],1,0,'C');
   $pdf->Cell(20,6,$data['umur'],1,0,'C');
   $pdf->Cell(24,6,$data['jk'],1,0,'C');
   $pdf->Cell(65,6,$data['alamat'],1,0,'C');
   $pdf->Cell(30,6,$data['pendidikan'],1,0,'C');
   $pdf->Cell(25,6,$data['no_telp'],1,0,'C');
   $pdf->Cell(40,6,$data['pekerjaan'],1,0,'C');
   $no++;  
}

ob_end_clean();
$pdf->Output('I','Biodata Laporan '.date('Y').'.pdf');
?>
 </body>
 </html>
