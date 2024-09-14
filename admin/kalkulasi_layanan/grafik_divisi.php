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
    // Subquery to calculate average for each kuisioner per layanan
    $subquery_csi = "
        SELECT survey.layanan, 
               AVG(survey.fakta) AS avg_csi 
        FROM survey 
        JOIN karyawan ON survey.id = karyawan.id 
        WHERE karyawan.divisi = '$divisi' 
        GROUP BY survey.layanan";

    // Query to get the maximum CSI among the averaged values
    $query_csi = "
        SELECT layanan, MAX(avg_csi) AS max_csi 
        FROM ($subquery_csi) AS subquery 
        GROUP BY layanan 
        ORDER BY max_csi DESC";

    $result_csi = mysqli_query($koneksi, $query_csi);
    
    // Prepare to store the highest CSI values per service
    $divisiData[$divisi] = [];

    while ($row = mysqli_fetch_assoc($result_csi)) {
        $divisiData[$divisi][] = [
            'layanan' => $row['layanan'],
            'csi' => round($row['max_csi'], 2)
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik CSI Tertinggi Per Divisi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script> <!-- Tambahkan ini -->
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Grafik CSI Tertinggi Per Divisi</h2>

        <!-- Card for the Chart -->
        <div class="card">
            <div class="card-header">
                <h3>CSI Tertinggi Per Divisi</h3>
            </div>
            <div class="card-body">
                <canvas id="csiChart"></canvas>
            </div>
        </div>

        <a class="btn btn-primary mt-4" href="../kotak_kalkulasi.php" role="button">Back</a>
    </div>

    <script>
        var ctx = document.getElementById('csiChart').getContext('2d');
        var csiChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php echo "'" . implode("','", array_keys($divisiData)) . "'"; ?>],
                datasets: [{
                    label: 'CSI Tertinggi',
                    data: [
                        <?php
                        $data = [];
                        foreach ($divisiData as $divisi => $layananData) {
                            $maxCsi = max(array_column($layananData, 'csi'));
                            $data[] = $maxCsi;
                        }
                        echo implode(",", $data);
                        ?>
                    ],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 1,
                        max: 7,
                        ticks: {
                            stepSize: 1
                        },
                        title: {
                            display: true,
                            text: 'CSI'
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            title: function(context) {
                                var divisi = context[0].label;
                                var data = <?php echo json_encode($divisiData); ?>;
                                var layanan = data[divisi].map(function(item) {
                                    return item.layanan + ' (CSI: ' + item.csi + ')';
                                }).join(', ');
                                return 'Divisi: ' + divisi + '\nLayanan: ' + layanan;
                            }
                        }
                    },
                    datalabels: { // Pengaturan datalabels
                        anchor: 'end',
                        align: 'end',
                        formatter: function(value) {
                            return value; // Tampilkan hanya nilai CSI
                        },
                        color: '#000', // Warna teks datalabels
                        font: {
                            weight: 'bold'
                        }
                    }
                }
            },
            plugins: [ChartDataLabels] // Tambahkan plugin data labels
        });
    </script>
</body>
</html>

