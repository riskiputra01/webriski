<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'serqual';

$koneksi = new mysqli($server, $username, $password, $database);

if ($koneksi) {
    // echo 'Server Connected Success';
} else {
    die(mysqli_error($koneksi));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(128, 128, 128, 0.5);
        }
        h2 {
            color: #004080;
        }
        .container {
            background-color: rgba(250, 250, 250, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin: auto;
            width: 100%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .card {
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #004080;
            color: white;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .table-responsive {
            margin-top: 20px;
        }
        .chart-container {
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Data Layanan Aplikasi</h2>

        <!-- Card for Table -->
        <div class="card">
            <div class="card-header">
                <h3>Tabel Data</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Kuisioner</th>
                        <th>Rata-rata Fakta</th>
                        <th>Rata-rata Harapan</th>
                        <th>GAP (Fakta - Harapan)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Query to fetch data from the survey table
                    $query = "SELECT kuisioner, 
                                     AVG(fakta) as avg_fakta, 
                                     AVG(harapan) as avg_harapan
                              FROM survey 
                              WHERE layanan = 'Layanan Aplikasi' 
                              GROUP BY kuisioner";
                    $result = mysqli_query($koneksi, $query);

                    // Initialize variables for calculating total and average
                    $total_fakta = 0;
                    $total_kuisioner = 0;

                    // Initialize row counter
                    $no = 1;

                    while ($row = mysqli_fetch_assoc($result)) {
                        if ($no > 5) break; // Only display 5 rows

                        $gap = $row['avg_fakta'] - $row['avg_harapan'];

                        // Accumulate the total for fakta and increment kuisioner count
                        $total_fakta += $row['avg_fakta'];
                        $total_kuisioner++;

                                // Store kuisioner and gap values for the chart
                                $kuisioner_labels[] = $row['kuisioner'];
                                $gap_values[] = round($gap, 2);

                                echo "<tr>";
                                echo "<td>{$no}</td>"; // Display row number
                                echo "<td>{$row['kuisioner']}</td>";
                                echo "<td>" . round($row['avg_fakta'], 2) . "</td>";
                                echo "<td>" . round($row['avg_harapan'], 2) . "</td>";
                                echo "<td>" . round($gap, 2) . "</td>";
                                echo "</tr>";

                                $no++;
                            }

                            // Calculate the average of fakta
                            $avg_fakta = $total_fakta / $total_kuisioner;

                            // Calculate CSI on scale 25-100
                            $csi_scale_25_100 = $avg_fakta * 14.286;

                            // Determine the CSI rating label based on the converted value
                            $rating_label = '';
                            if ($csi_scale_25_100 >= 25.00 && $csi_scale_25_100 <= 39.00) {
                                $rating_label = 'D Sangat tidak Memuaskan';
                            } elseif ($csi_scale_25_100 > 39.00 && $csi_scale_25_100 <= 63.86) {
                                $rating_label = 'C Tidak Memuaskan';
                            } elseif ($csi_scale_25_100 > 63.86 && $csi_scale_25_100 <= 88.72) {
                                $rating_label = 'B Memuaskan';
                            } elseif ($csi_scale_25_100 > 88.72 && $csi_scale_25_100 <= 100.00) {
                                $rating_label = 'A Sangat Memuaskan';
                            }

                            // Display the average of fakta row (CSI scale 1-7)
                            echo "<tr>";
                            echo "<th colspan='2'>CSI (skala 1-7)</th>";
                            echo "<th colspan='3'>" . round($avg_fakta, 2) . "</th>";
                            echo "</tr>";

                            // Display the CSI scale 25-100 row with the rating label
                            echo "<tr>";
                            echo "<th colspan='2'>CSI (skala 25-100)</th>";
                            echo "<th colspan='3'>" . round($csi_scale_25_100, 2) . " - $rating_label</th>";
                            echo "</tr>";
                            ?>
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="apk.php" role="button">Back</a>
                    <a class="btn btn-primary" href="cctv.php" role="button">Next</a>
                </div>
            </div>
        </div>

        <!-- Card for Chart -->
        <div class="card">
            <div class="card-header">
                <h3>Grafik GAP (Fakta - Harapan)</h3>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <canvas id="gapChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Data for the chart
    const labels = <?php echo json_encode($kuisioner_labels); ?>;
    const gapData = <?php echo json_encode($gap_values); ?>;

    const ctx = document.getElementById('gapChart').getContext('2d');
    const gapChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'GAP (Fakta - Harapan)',
                data: gapData,
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                datalabels: {
                    anchor: 'end',
                    align: 'top',
                    color: '#000',
                    font: {
                        weight: 'bold'
                    },
                    formatter: function(value) {
                        return value.toFixed(2);
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    });
</script>

</body>
</html>
