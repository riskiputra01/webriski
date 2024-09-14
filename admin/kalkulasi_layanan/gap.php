<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'serqual';

// Establish the database connection
$koneksi = new mysqli($server, $username, $password, $database);

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

$services = ['Direktorat', 'Layanan Solusi Bisnis', 'Layanan EUD', 'Layanan Internet', 'Layanan SAP', 'Layanan Aplikasi', 'Layanan CCTV'];

$gaps = [];

foreach ($services as $service) {
    $query = "SELECT kuisioner, 
                     (AVG(harapan) - AVG(fakta)) as gap,
                     AVG(fakta) as avg_fakta, 
                     AVG(harapan) as avg_harapan 
              FROM survey 
              WHERE layanan = '$service' 
              GROUP BY kuisioner 
              ORDER BY gap DESC";
    $result = $koneksi->query($query);

    if (!$result) {
        die("Query failed: " . $koneksi->error);
    }

    while ($row = $result->fetch_assoc()) {
        $gaps[] = [
            'kuisioner' => $row['kuisioner'],
            'avg_fakta' => round($row['avg_fakta'], 2),
            'avg_harapan' => round($row['avg_harapan'], 2),
            'gap' => round($row['gap'], 2),
        ];
    }
}

// Sort gaps by highest gap
usort($gaps, function($a, $b) {
    return $b['gap'] <=> $a['gap'];
});

// Get top 5 gaps
$top_gaps = array_slice($gaps, 0, 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 5 Highest Gaps</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: left;
            color: #007bff;
            margin-bottom: 20px;
        }
        .table {
            margin: auto;
            width: 100%;
        }
        .table th, .table td {
            text-align: left;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tabel Skor GAP Tertinggi</h2>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Variable</th>
                    <th>Rata Rata Fakta</th>
                    <th>Rata Rata Harapan</th>
                    <th>Gap</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($top_gaps as $gap) {
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>{$gap['kuisioner']}</td>";
                    echo "<td>{$gap['avg_fakta']}</td>";
                    echo "<td>{$gap['avg_harapan']}</td>";
                    echo "<td>{$gap['gap']}</td>";
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="../kotak_kalkulasi.php" role="button">Back</a>
    </div>
</body>
</html>
