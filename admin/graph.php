<?php
include("..//header.php")
?>
<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'serqual';

// Create connection
$koneksi = new mysqli($server, $username, $password, $database);

// Check connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

// Ambil rata-rata CSI yang dikelompokkan berdasarkan tahun
$sql = "
    SELECT 
        YEAR(created_at) as year, 
        AVG(fakta) as avg_csi 
    FROM 
        survey  /* Replace with your actual table name that stores CSI data */
    GROUP BY 
        YEAR(created_at)";
        
$result = $koneksi->query($sql);

$years = [];
$avgCsiScores = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $years[] = $row['year'];
        $avgCsiScores[] = $row['avg_csi'];
    }
} else {
    echo "No results found.";
}
$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average CSI Per Year</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #chart-container {
            height: 7cm; /* Atur tinggi menjadi 7 cm */
            width: 100%; /* Gunakan lebar penuh wadah */
        }
        #yearlyDataChart {
            height: 90%; /* Make the canvas take up the full height of the container */
            width: 90%; /* Make the canvas take up the full width of the container */
        }
        .container {
            background-color: rgba(250, 250, 250, 0.8);
            padding: 20px;
            border-radius: 10px;
            margin: auto;
            width: 100%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="container">
<h2>Average CSI Per Year</h2>
<div id="chart-container">
    <canvas id="yearlyDataChart"></canvas>
</div>
<a class="btn btn-primary" href="kotak_kalkulasi.php" role="button">Back</a>

<script>
    var ctx = document.getElementById('yearlyDataChart').getContext('2d');
    var yearlyDataChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($years); ?>,
            datasets: [{
                label: 'Average CSI Per Year',
                data: <?php echo json_encode($avgCsiScores); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                barThickness: 100, // Atur lebar batang dalam piksel (sesuaikan agar sesuai dengan kira-kira 2 cm)
                maxBarThickness: 100 // Pastikan palang tidak melebihi lebar yang ditentukan
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: false,
                    min: 1, // Tetapkan nilai sumbu y minimum ke 1
                    max: 7, // Tetapkan nilai sumbu y maksimum menjadi 7
                    ticks: {
                        stepSize: 1 // Tentukan interval antar tanda centang
                    }
                }
            },
            responsive: true,
            maintainAspectRatio: false // Izinkan bagan diubah ukurannya berdasarkan dimensi kanvas
        }
    });
</script>

</body>
</html>
