<?php
include("..//header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotak Pilihan Keren</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f0f0f0;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Ubah ke center untuk memusatkan kotak */
            align-items: flex-start;
            padding: 20px;
            max-width: 1200px; /* Tambahkan batasan lebar maksimum untuk menjaga tata letak */
            margin: 0 auto; /* Center container horizontally */
        }

        .choice-box {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 30px;
            margin: 20px;
            width: 200px;
            height: 200px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, background-color 0.3s;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .choice-box i {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .choice-box h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .choice-box p {
            font-size: 14px;
        }

        .choice-box:hover {
            transform: translateY(-10px);
            background-color: #0056b3;
        }

        .choice-box a {
            color: inherit;
            text-decoration: none;
            display: block;
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="choice-box">
            <a href="kalkulasi_layanan/umum.php">
                <i class="fa-solid fa-earth-americas"></i>
                <h3>Layanan</h3>
                <p>Pernyataan Umum</p>
            </a>
        </div>
        <div class="choice-box">
            <a href="kalkulasi_layanan/bisnis.php">
                <i class="fa-solid fa-business-time"></i>
                <h3>Layanan</h3>
                <p>Solusi Bisnis</p>
            </a>
        </div>
        <div class="choice-box">
            <a href="kalkulasi_layanan/eud.php">
                <i class="fa-brands fa-slack"></i>
                <h3>Layanan</h3>
                <p>End User Device</p>
            </a>
        </div>
        <div class="choice-box">
            <a href="kalkulasi_layanan/internet.php">
                <i class="fa-solid fa-network-wired"></i>
                <h3>Layanan</h3>
                <p>Internet</p>
            </a>
        </div>
        <div class="choice-box">
            <a href="kalkulasi_layanan/sap.php">
                <i class="fas fa-chart-line"></i>
                <h3>Layanan</h3>
                <p>SAP</p>
            </a>
        </div>
        <div class="choice-box">
            <a href="kalkulasi_layanan/apk.php">
                <i class="fa-solid fa-address-book"></i>
                <h3>Layanan</h3>
                <p>Aplikasi</p>
            </a>
        </div>
        <div class="choice-box">
            <a href="kalkulasi_layanan/cctv.php">
                <i class="fa-solid fa-camera"></i>
                <h3>Layanan</h3>
                <p>CCTV</p>
            </a>
        </div>
        <div class="choice-box">
            <a href="kalkulasi_layanan/konversi_dasbord.php">
                <i class="fas fa-hourglass-half"></i>
                <h3>Data Layanan</h3>
                <p>KONVERSI</p>
            </a>
        </div>
        <div class="choice-box">
            <a href="kalkulasi_layanan/gap.php">
                <i class="fa-solid fa-folder-open"></i>
                <h3>Data Layanan </h3>
                <p>Nilai GAP Tertinggi</p>
            </a>
        </div>
        <div class="choice-box">
            <a href="kalkulasi_layanan/hasil_capaian.php">
                <i class="fa-solid fa-envelope"></i> 
                <h3>Kualitas Layanan</h3>
                <p>Data Survey</p>
            </a>
        </div>
        <div class="choice-box">
            <a href="kalkulasi_layanan/tabel_divisi.php">
                <i class="fa-solid fa-envelope"></i> 
                <h3>Data Divisi</h3>
                <p>Survey Kepuasan Layanan SI/TI</p>
            </a>
        </div>
        <div class="choice-box">
            <a href="kontak_keluhan.php">
                <i class="fa-solid fa-envelope"></i> 
                <h3>Saran Pengguna</h3>
                <p>Survey Kepuasan Layanan SI/TI</p>
            </a>
        </div>
        <div class="choice-box">
            <a href="kalkulasi_layanan/grafik_divisi.php">
                <i class="fa-solid fa-envelope"></i> 
                <h3>Grafik Divisi</h3>
                <p>Survey Kepuasan Layanan SI/TI</p>
            </a>
        </div>
        <div class="choice-box">
            <a href="graph.php">
                <i class="fa-solid fa-envelope"></i> 
                <h3>Grafik Pertahun</h3>
                <p>Survey Kepuasan Layanan SI/TI</p>
            </a>
        </div>
    </div>
</body>
</html>
