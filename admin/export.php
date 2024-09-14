<?php
require 'harapan.php'; // pastikan path ini sesuai dengan struktur folder Anda

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Buat objek Spreadsheet baru
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Mengatur header untuk file Excel
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Layanan');
$sheet->setCellValue('C1', 'Fakta');
$sheet->setCellValue('D1', 'Harapan');

// Ambil data dari database (misalnya tabel survey)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "serqual"; // ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, layanan, fakta, harapan FROM survey"; // ganti dengan nama tabel dan kolom yang sesuai
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $rowIndex = 2; // mulai dari baris kedua
    while ($row = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $rowIndex, $row['id']);
        $sheet->setCellValue('B' . $rowIndex, $row['layanan']);
        $sheet->setCellValue('C' . $rowIndex, $row['fakta']);
        $sheet->setCellValue('D' . $rowIndex, $row['harapan']);
        $rowIndex++;
    }
} else {
    echo "0 results";
}
$conn->close();

// Buat file Excel
$writer = new Xlsx($spreadsheet);
$filename = 'data_survey.xlsx';

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Cache-Control: max-age=0');

// Simpan ke output
$writer->save('php://output');
exit;
?>
