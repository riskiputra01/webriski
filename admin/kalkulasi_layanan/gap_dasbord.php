<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Survey</title>
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
            <img src="../gambar/admin.jpg" alt="Logo">
        </div>
        <a href="../dashboard.php" class="active"><i class="fa-solid fa-house"></i>Dashboard</a>
        <a href="survey.php"><i class="fa-solid fa-envelope"></i> Data Survey</a>
        <a href="konversi_dasbord.php"><i class="fas fa-hourglass-half"></i> Konversi Data</a>
        <a href="gap_dasbord.php"><i class="fa-solid fa-folder-open"></i> Nilai GAP</a>
        <a href="capaian_dasbord.php"><i class="fa-solid fa-folder-open"></i> Data Pencapaian</a>
    </div>
    
    <!-- Toggle Button -->
    <div class="toggle-btn" id="toggle-btn">
        <i class="fas fa-bars"></i>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
    <div class="header"></div>
        <div class="content">
            <?php include("gap.php");?>
        </div>
    </div>
    <script>
        const sidebar = document.getElementBy
        document.getElementById('toggle-btn').addEventListener('click', function () {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        sidebar.classList.toggle('active');
        mainContent.classList.toggle('active');
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
