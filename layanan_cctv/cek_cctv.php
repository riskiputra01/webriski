<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner Kualitas Layanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .container h2 {
            color: #0078d4;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-options {
            display: flex;
            gap: 20px;
        }
        .form-option {
            display: flex;
            align-items: center;
        }
        .form-option input[type="radio"] {
            margin-right: 10px; /* 1cm gap (approx) between radio button and label */
        }
        .form-group button {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #0078d4;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #005a9e;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Kuesioner Kualitas Layanan SI & TI PT KTI 2023</h2>

    <form id="kuesionerForm">
        <div class="form-group">
            <label for="layanan">Apakah Anda Pengguna CCTV</label>
            <div class="form-options">
                <div class="form-option">
                    <input type="radio" id="ya" name="pengguna_cctv" value="Ya" required>
                    <label for="ya">Ya</label>
                </div>
                <div class="form-option">
                    <input type="radio" id="tidak" name="pengguna_cctv" value="Tidak">
                    <label for="tidak">Tidak</label>
                </div>
            </div>
        </div>
        
        <div class="form-group">
        <button><a class="btn btn-primary" href="../layanan_internet/layanan_internet1.php" role="button">Back</a></button>
            <button type="submit">Next</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('kuesionerForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Determine the selected option
        const selectedOption = document.querySelector('input[name="pengguna_cctv"]:checked').value;

        // Redirect based on the selected option
        if (selectedOption === 'Ya') {
            window.location.href = 'layanan_cctv1.php';
        } else if (selectedOption === 'Tidak') {
            window.location.href = '../layanan_aplikasi/cek_layanan_apk.php';
        }
    });
</script>

</body>
</html>
