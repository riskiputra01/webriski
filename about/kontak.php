<?php
include("../header.php");
include("../koneksi.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Pastikan koneksi berhasil
    if ($koneksi) {
        // Query untuk menyimpan data ke database
        $query = "INSERT INTO keluhan (name, email, pesan) VALUES ('$name', '$email', '$message')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            echo "<script>alert('Pesan Anda berhasil dikirim.');</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan saat mengirim pesan.');</script>";
        }
    } else {
        echo "<script>alert('Gagal terhubung ke database.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .contact-header {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 50px;
        }

        .contact-info {
            background-color: #0095B6;
            color: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .contact-info h3 {
            margin-bottom: 20px;
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        .form-control, .btn-primary {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #0095B6;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #007d99;
        }

        .map-container {
            margin-bottom: 30px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }

        .map-container iframe {
            width: 100%;
            height: 350px;
            border: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="contact-header">
            <h1>Contact Us</h1>
            <p>Feel free to reach out to us for any inquiries or support.</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><strong>Phone:</strong> 0254 - 311 206, 310 346</p>
                    <p><strong>Website:</strong> https://www.krakatautirta.co.id/</p>
                    <p><strong>Location:</strong> Jl. Ir. Sutami Kebonsari Citangkil, Cilegon 42442, Indonesia</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map-container">
                    <h3 class="text-center mb-4">Our Location</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.846185153622!2d106.01954107416303!3d-6.015845993969471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418e495f6a7869%3A0x7cbd409c864e7793!2sPT.%20Krakatau%20Tirta%20Industri!5e0!3m2!1sid!2sde!4v1724989000170!5m2!1sid!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
