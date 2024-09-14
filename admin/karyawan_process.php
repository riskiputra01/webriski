<?php
include("../koneksi.php");
include("..//header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
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
    <div class="container mt-5">
        <div class="table-responsive">
        <h2>Survey Data Karyawan</h2>
            <p>Survey Kepuasan Layanan SI/TI</p>
            <table class="table table-bordered">
            <thead>
                    <tr>
                        <th>Direktorat</th>
                        <th>Divisi</th>
                        <th>Jenis_kelamin</th>
                        <th>Usia</th>
                        <th>Masa Kerja</th>
                        <th>Level Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM karyawan";
                    $result = mysqli_query($koneksi, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$row['direktorat']}</td>";
                        echo "<td>{$row['divisi']}</td>";
                        echo "<td>{$row['jenis_kelamin']}</td>";
                        echo "<td>{$row['usia']}</td>";
                        echo "<td>{$row['masa_kerja']}</td>";
                        echo "<td>{$row['level_jabatan']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
