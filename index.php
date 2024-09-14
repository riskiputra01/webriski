<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SERQUAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .card-custom {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card-custom:hover {
            transform: scale(1.05);
        }

        .footer {
            background-color: #0095B6;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!--Start Navigasi Depan-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-2 py-lg-3 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="image/home/logoKTI.png" alt="Krakatau Tirta Industri Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="about/tentang_kami.php">Tentang Kami</a>
                <a class="nav-link" href="about/layanan.php">Layanan</a>
                <a class="nav-link" href="about/kontak.php">Kontak</a>
                <a href="login.php" class="btn btn-outline-dark shadow-none ms-lg-3">Login</a>
              </div>
            </div>
        </div>
    </nav>
    <!--Break Navigasi Depan-->

    <!--Start Garis Navigasi Atas-->
    <footer style="border-top: 4px solid #0095B6;">
        <div class="container" style="padding-bottom: 10px;">
        </div>
    </footer>
    <!--Break Garis Navigasi Atas-->

    <!-- START IMAGE CRUSIAL-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/home/sungaiKTI.jpeg" class="d-block w-100" alt="Gambar 1">
            </div>
            <div class="carousel-item">
                <img src="image/home/sungaiKTI3.jpeg" class="d-block w-100" alt="Gambar 2">
            </div>
            <div class="carousel-item">
                <img src="image/home/sungaiKTI2.jpeg" class="d-block w-100" alt="Gambar 3">
            </div>
            <div class="carousel-item">
                <img src="image/home/sungaiKTI1.jpeg" class="d-block w-100" alt="Gambar 4">
            </div>
        </div>
    </div>
    <!-- BREAK IMAGE-->

    <!-- START CONTENT SECTION WITH CARDS -->
    <div class="container my-5">
    <div class="row">
        <div class="col-lg-3 col-md-5 mb-4">
            <div class="card card-custom">
                <img src="image/produk/grafik.jpg" class="card-img-top" alt="Layanan Survey">
                <div class="card-body">
                    <h5 class="card-title">Layanan Survey</h5>
                    <p class="card-text">Informasi tentang layanan yang kami tawarkan untuk meningkatkan kualitas pelayanan.</p>
                    <a href="about/layanan.php" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-5 mb-4">
            <div class="card card-custom">
                <img src="image/produk/about.jpg" class="card-img-top" alt="Tentang Kami">
                <div class="card-body">
                    <h5 class="card-title">Tentang Kami</h5>
                    <p class="card-text">Pelajari lebih lanjut tentang perusahaan kami, misi, dan visi kami.</p>
                    <a href="about/tentang_kami.php" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-5 mb-4">
            <div class="card card-custom">
                <img src="image/produk/kontak.jpg" class="card-img-top" alt="Hubungi Kami">
                <div class="card-body">
                    <h5 class="card-title">Hubungi Kami</h5>
                    <p class="card-text">Ada pertanyaan atau butuh bantuan? Hubungi kami untuk informasi lebih lanjut.</p>
                    <a href="about/kontak.php" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-5 mb-4">
            <div class="card card-custom">
                <img src="image/produk/air1.jpg" class="card-img-top" alt="Hubungi Kami">
                <div class="card-body">
                    <h5 class="card-title">Hubungi Kami</h5>
                    <p class="card-text">Ada pertanyaan atau butuh bantuan? Hubungi kami untuk informasi lebih lanjut.</p>
                    <a href="kontak.php" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- END CONTENT SECTION WITH CARDS -->    
</body>
</html>

<?php
include("footer.php");
?>
