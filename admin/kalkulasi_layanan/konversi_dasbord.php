<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Konfersi</title>
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
    <!-- Main Content -->
    <div class="main-content" id="main-content">
    <div class="container">
            <h2>Data Konfersi</h2>
                <div class="table-responsive"> <!-- Add table-responsive class here -->
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>NILAI PERSEPSI</th>
                                <th>NILAI CSI</th>
                                <th>NILAI CSI KONVERSI</th>
                                <th>MUTU LAYANAN</th>
                                <th>KUALITAS LAYANAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>1</td>
                                <td>1,00 - 1,56</td>
                                <td>25,00 - 39,00</td>
                                <td>D</td>
                                <td>Sangat Tidak Memuaskan</td>
                            </tr>
                            <tr class="text-center">
                                <td>2</td>
                                <td>1,57 - 2,55</td>
                                <td>39,01 - 63,86</td>
                                <td>C</td>
                                <td>Tidak Memuaskan</td>
                            </tr>
                            <tr class="text-center">
                                <td>3</td>
                                <td>2,56 - 3,54</td>
                                <td>63,87 - 88,72</td>
                                <td>B</td>
                                <td>Memuaskan</td>
                            </tr>
                            <tr class="text-center">
                                <td>4</td>
                                <td>3,55 - 4,00</td>
                                <td>88,73 - 100,00</td>
                                <td>A</td>
                                <td>Sangat Memuaskan</td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="../dashboard.php" role="button">Back</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
