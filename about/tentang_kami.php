<?php
include("../header.php");
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

        .card-text {
            text-align: justify; /* Mengatur teks agar rata kiri dan kanan */
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

    <!-- START IMAGE CRUSIAL-->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../image/home/sungaiKTI.jpeg" class="d-block w-100" alt="Gambar 1">
            </div>
            <div class="carousel-item">
                <img src="../image/home/sungaiKTI1.jpeg" class="d-block w-100" alt="Gambar 2">
            </div>
        </div>
    </div>
    <!-- BREAK IMAGE-->

    <!-- START CONTENT SECTION WITH CARDS -->
    <div class="container my-5">
        <div class="row">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="card-title">PT KRAKATAU TIRTA INDUSTRI</h5>
                    </div>
                    <p class="card-text">
                        Pada tahun 1978 PT Krakatau Steel (Persero) Tbk mengoperasikan Unit Penjernihan Air, sebuah unit penunjang kegiatan operasional untuk menyediakan air bersih yang merupakan cikal bakal dari PT Krakatau Tirta Industri. 
                        Pada 28 Februari 1996, unit penunjang tersebut diotonomikan dan didirikan 
                        sebagai perseroan terbatas yang bernama PT Krakatau Tirta Industri dengan PT Krakatau Steel (Persero) dan PT Krakatau Industrial Estate Cilegon sebagai pemegang saham pendirinya. Badan usaha ini fokus pada penyediaan dan pengolahan air bersih. 
                        Produk berupa air bersih yang dihasilkan digunakan untuk kebutuhan masyarakat dan industri di Kota Cilegon dan sekitarnya. Terhitung sejak 30 Juni 2021, pemegang saham PT Krakatau Tirta Industri terdiri dari PT Krakatau Steel (Persero) Tbk yang memiliki 0,01% saham, PT Krakatau Sarana Infrastruktur (dahulu bernama PT Krakatau Industrial Estate Cilegon) memiliki 50,99% saham dan sejak 28 Februari 2023 PT Chandra Daya Investasi (PT CAP Group) memiliki (49%) sahamnya Air baku untuk kegiatan pengolahan air diambil dari Sungai Cidanau, bersumber dari danau alam Rawa Dano, dan Sungai Cipasauran. Air baku dari Sungai Cidanau dialirkan menggunakan pipa diameter 1,4m sepanjang ±28km untuk diolah menjadi air bersih di Instalasi Pengolahan Air Krenceng. Kapasitas terpasang di Instalasi Pengolahan Air Krenceng adalah sebesar 2.000 liter/detik. Setelah Instalasi Pengolahan Air Cidanau dan Bendung Cipasauran selesai dibangun tahun 2018, saat ini PT Krakatau Tirta Industri juga memanfaatkan air baku dari Sungai Cipasauran untuk diolah di Instalasi Pengolahan Air Cidanau. Kapasitas terpasang di Instalasi Pengolahan Air Cidanau adalah sebesar 600 liter/detik. Seiring perkembangan industri di kota Cilegon, kebutuhan air, baik secara kuantitas maupun kualitas yang spesifik, juga turut meningkat. PT Krakatau Tirta Industri telah mengembangkan potensi bisnis yang dimiliki untuk memenuhi kebutuhan pasar tersebut dengan 
                        membangun dan mengoperasikan beberapa Instalasi Pengolahan Air Demin, Water Recycle Plant, Waste Water Treatment Plant dengan teknologi membrane, ultrafiltrasi, ion exchanger dan biological treatment.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT SECTION WITH CARDS -->    
</body>
</html>

<?php
include("../footer.php");
?>
