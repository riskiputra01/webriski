<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: ../login.php");
    exit();
}

include("../koneksi.php");

// Fetch data for each category
$categories = ['direktorat', 'divisi', 'jenis_kelamin', 'usia', 'masa_kerja', 'level_jabatan'];
$data = [];

foreach ($categories as $category) {
    $query = "SELECT $category, COUNT(*) as count FROM karyawan GROUP BY $category";
    $result = mysqli_query($koneksi, $query);
    
    $labels = [];
    $counts = [];
    
    while ($row = mysqli_fetch_assoc($result)) {
        $labels[] = $row[$category];
        $counts[] = $row['count'];
    }
    
    $data[$category] = [
        'labels' => $labels,
        'counts' => $counts
    ];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <style>
        /* Sidebar styling */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #343a40;
            color: #fff;
            transition: transform 0.3s ease;
        }

        .sidebar a {
            display: block;
            padding: 15px;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #007bff;
        }

        .sidebar .logo img {
            display: block;
            margin: 20px auto;
            border-radius: 50%;
            width: 100px;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }

        /* Sidebar responsive toggle button */
        .toggle-btn {
            position: fixed;
            left: 250px;
            top: 15px;
            font-size: 24px;
            cursor: pointer;
            z-index: 1001;
            display: none;
        }

        /* Sidebar collapsed */
        .sidebar.collapsed {
            transform: translateX(-100%);
        }

        .main-content.collapsed {
            margin-left: 0;
        }

        /* Media queries */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                position: fixed;
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .toggle-btn {
                display: block;
                left: 10px;
            }

            .main-content {
                margin-left: 0;
            }

            .main-content.active {
                margin-left: 250px;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <img src="./gambar/admin.jpg" alt="Logo">
        </div>
        <a href="javascript:void(0);" onclick="loadPage('dashboard.php?page=dashboard')"><i class="fa-solid fa-house"></i>Dashboard</a>
        <a href="javascript:void(0);" onclick="loadPage('karyawan_process.php?page=data')"><i class="fa-solid fa-folder-open"></i>Data Karyawan</a>
        <a href="javascript:void(0);" onclick="loadPage('layanan_process.php')"><i class="fas fa-concierge-bell"></i> Data Layanan</a>
        <a href="javascript:void(0);" onclick="loadPage('survey_process.php')"><i class="fa-solid fa-envelope"></i> Data Survey</a>
        <a href="javascript:void(0);" onclick="loadPage('kotak_kalkulasi.php')"><i class="fas fa-file-alt"></i> Kalkulasi Layanan</a>
        <a href="javascript:void(0);" onclick="loadPage('process_kritik.php')"><i class="fas fa-file-alt"></i> Kritik dan Saran</a>
        <a href="javascript:void(0);" onclick="loadPage('harapan.php')"><i class="fas fa-file-alt"></i> Harapan</a>
        <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    </div>

    <!-- Toggle Button -->
    <div class="toggle-btn" id="toggle-btn">
        <i class="fas fa-bars"></i>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <div id="content" class="content">
            <!-- This is where the content will be dynamically loaded -->
            <div class="container mt-5">
                <h2>GRAFIK DATA KARYAWAN QUESIONER LAYANAN SI/TI</h2>
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Direktorat</div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <canvas id="direktoratChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Divisi</div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <canvas id="divisiChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Card 3 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Jenis Kelamin</div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <canvas id="jenis_kelaminChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Usia</div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <canvas id="usiaChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Card 5 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Masa Kerja</div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <canvas id="masa_kerjaChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">Level Jabatan</div>
                            <div class="card-body">
                                <div class="chart-container">
                                    <canvas id="level_jabatanChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>

    <script>
        // Function to load pages dynamically
        function loadPage(page) {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', page, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById('content').innerHTML = xhr.responseText;
                }
            }
            xhr.send();
        }

        // Generate bar chart for each category
        const categories = <?php echo json_encode($categories); ?>;
        const data = <?php echo json_encode($data); ?>;

        categories.forEach(category => {
            const ctx = document.getElementById(category + 'Chart').getContext('2d');

            // Generate distinct colors for each label
            const backgroundColors = data[category].labels.map((label, index) => {
                const colors = [
                    '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', 
                    '#FF9F40', '#C9CBCF', '#FFCD56', '#E7E9ED', '#71B37C'
                ];
                return colors[index % colors.length]; // Ensure colors cycle if labels exceed the number of colors
            });

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data[category].labels,
                    datasets: [{
                        label: `Count by ${category}`,
                        data: data[category].counts,
                        backgroundColor: backgroundColors,
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        },
                        datalabels: {
                            anchor: 'end',
                            align: 'end',
                            color: '#555',
                            font: {
                                weight: 'bold'
                            }
                        }
                    }
                }
            });
        });

        // Toggle sidebar visibility
        const toggleBtn = document.getElementById('toggle-btn');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        toggleBtn.addEventListener('click', function () {
            sidebar.classList.toggle('active');
            mainContent.classList.toggle('active');
        });
    </script>
</body>

</html>
