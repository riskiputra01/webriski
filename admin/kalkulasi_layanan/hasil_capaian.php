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

$services = ['Direktorat', 'Layanan Solusi Bisnis', 'Layanan EUD', 'Layanan Internet', 'Layanan SAP', 'Layanan Aplikasi', 'Layanan CCTV'];

$averages = [];
$total_fakta = 0;
$service_count = count($services);

foreach ($services as $service) {
    $query = "SELECT AVG(fakta) as avg_fakta FROM survey WHERE layanan = '$service'";
    $result = mysqli_query($koneksi, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $avg_fakta = round($row['avg_fakta'], 2);
        $averages[$service] = $avg_fakta;
        $total_fakta += $avg_fakta;
    } else {
        $averages[$service] = 0; // Set to 0 if no data is found
    }
}

// Calculate overall average fakta
$overall_avg_fakta = $service_count > 0 ? round($total_fakta / $service_count, 2) : 0;

function determinePredikat($avg_fakta) {
    // Convert avg_fakta from CSI 1-7 scale to CSI 25-100 scale
    $converted_csi = (($avg_fakta - 1) / 6) * 75 + 25;

    if ($converted_csi >= 25.00 && $converted_csi <= 39.00) {
        return 'D Sangat tidak memuaskan';
    } elseif ($converted_csi >= 39.01 && $converted_csi <= 63.86) {
        return 'C Tidak memuaskan';
    } elseif ($converted_csi >= 63.87 && $converted_csi <= 88.72) {
        return 'B Memuaskan';
    } elseif ($converted_csi >= 88.73 && $converted_csi <= 100.00) {
        return 'A Sangat Memuaskan';
    } else {
        return 'D Sangat tidak memuaskan'; // Default to the lowest grade if avg_fakta is 0 or invalid
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Fakta Values</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
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
        .table-responsive {
            margin-top: 20px;
        }
        .chart-container {
            width: 50%;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pencapaian Data Survey</h2>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Umum/Layanan</th>
                    <th>Nilai CSI</th>
                    <th>Predikat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($averages as $service => $avg_fakta) {
                    $predikat = determinePredikat($avg_fakta);
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>$service</td>";
                    echo "<td>$avg_fakta</td>";
                    echo "<td>$predikat</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
                <tr>
                    <td colspan="2"><strong>Skor CSI</strong></td>
                    <td><strong><?php echo $overall_avg_fakta; ?></strong></td>
                    <td><strong><?php echo determinePredikat($overall_avg_fakta); ?></strong></td>
                </tr>
            </tbody>
        </table>
        <a class="btn btn-primary" href="../kotak_kalkulasi.php" role="button">Back</a>
    </div>
</body>
</html>
