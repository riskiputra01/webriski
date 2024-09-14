<?php
include("../koneksi.php");
include("..//header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harapan</title>
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
        <h2>HARAPAN</h2>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Harapan</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $query = "SELECT * FROM tanggapan";
                    $result = mysqli_query($koneksi, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$row['id']}</td>";
                        echo "<td>{$row['harapan']}</td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
        <a class="btn btn-primary" href="dashboard.php" role="button">Back</a>
    </div>
</body>
</html>
