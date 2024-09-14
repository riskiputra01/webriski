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
        <h2>Survey Data Layanan</h2>
            <p>Survey Kepuasan Layanan SI/TI</p>
            <table class="table table-bordered">
            <thead>
                    <tr>
                        <th>Layanan Aplikasi</th>
                        <th>Layanan Solusi Bisnis</th>
                        <th>Layanan And User Perangkat Lunak</th>
                        <th>Layanan And User Perangkat Keras</th>
                        <th>Layanan Jaringan Komunikasi</th>
                        <th>Layanan Dukungan Pengguna</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM layanan";
                    $result = mysqli_query($koneksi, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$row['layanan_apk']}</td>";
                        echo "<td>{$row['layanan_solusi_bisnis']}</td>";
                        echo "<td>{$row['layanan_and_user_perangkat_lunak']}</td>";
                        echo "<td>{$row['layanan_and_user_perangkat_keras']}</td>";
                        echo "<td>{$row['layanan_jaringan_komunikasi']}</td>";
                        echo "<td>{$row['layanan_dukungan_pengguna']}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
