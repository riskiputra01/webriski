<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'serqual';

$koneksi = new mysqli($server, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

// List of divisions
$divisiList = [
    'Sub Direktorat PU', 
    'Sekretaris Perusahaan', 
    'Satuan Pengawasan Intern', 
    'Divisi Sistem Informasi & Manajemen Kinerja', 
    'Divisi Human Capital & Umum', 
    'Divisi Keuangan', 
    'Divisi Distribusi & Perc Teknik', 
    'Divisi Produksi', 
    'Divisi Pengembangan Usaha',
    'Divisi Perencanaan Korporat',
    'Divisi Komersial',
];

$divisiData = [];

foreach ($divisiList as $divisi) {
    // Select the maximum gap and associated kuisioner and layanan for each division
    $query_gap = "
        SELECT survey.kuisioner, survey.layanan, 
               (AVG(survey.fakta) - AVG(survey.harapan)) AS gap 
        FROM survey 
        JOIN karyawan ON survey.id = karyawan.id 
        WHERE karyawan.divisi = '$divisi' 
        GROUP BY survey.kuisioner, survey.layanan 
        ORDER BY gap DESC 
        LIMIT 1"; // Get only the highest gap

    $result_gap = mysqli_query($koneksi, $query_gap);
    $maxGapData = mysqli_fetch_assoc($result_gap);

    // If there's data, store it; otherwise, set defaults
    if ($maxGapData) {
        $divisiData[$divisi][] = [
            'kuisioner' => $maxGapData['kuisioner'],
            'layanan' => $maxGapData['layanan'],
            'gap' => round($maxGapData['gap'], 2)
        ];
    } else {
        $divisiData[$divisi][] = [
            'kuisioner' => '-',
            'layanan' => '-',
            'gap' => 0
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gap Tertinggi Per Divisi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        h2 {
            color: #004080;
        }
        .container {
            margin-top: 20px;
            background-color: rgba(250, 250, 250, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .card {
            margin-top: 20px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pencapaian Data Survey per Divisi</h2>

        <!-- Card for the Table -->
        <div class="card">
            <div class="card-header">
                <h3>Data Gap Tertinggi</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Divisi</th>
                                <th>Kuesioner</th>
                                <th>Gap Tertinggi</th>
                                <th>Layanan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach ($divisiData as $divisi => $dataList) { 
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $divisi; ?></td>
                                <td><?php echo $dataList[0]['kuisioner']; ?></td>
                                <td><?php echo $dataList[0]['gap']; ?></td>
                                <td><?php echo $dataList[0]['layanan']; ?></td>
                            </tr>
                            <?php 
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <a class="btn btn-primary mt-4" href="../kotak_kalkulasi.php" role="button">Back</a>
    </div>
</body>
</html>
