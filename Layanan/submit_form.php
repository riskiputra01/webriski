<?php
// Include the database connection
include '../koneksi.php';
?>
<script>
        function validateForm() {
            const categories = [
                'layanan_apk',
                'layanan_solusi_bisnis',
                'layanan_and_user_perangkat_lunak',
                'layanan_and_user_perangkat_keras',
                'layanan_jaringan_komunikasi',
                'layanan_dukungan_pengguna'
            ];

            for (let category of categories) {
                const checkboxes = document.querySelectorAll(`input[name="${category}[]"]`);
                let isChecked = false;
                for (let checkbox of checkboxes) {
                    if (checkbox.checked) {
                        isChecked = true;
                        break;
                    }
                }
                if (!isChecked) {
                    alert('Please select at least one option in the ' + category.replace('_', ' ') + ' category.');
                    return false;
                }
            }
            return true;
        }
    </script>
<?php
// Prepare an associative array to hold the form data
$data = [
    'layanan_apk' => isset($_POST['layanan_apk']) ? implode(', ', $_POST['layanan_apk']) : null,
    'layanan_solusi_bisnis' => isset($_POST['layanan_solusi_bisnis']) ? implode(', ', $_POST['layanan_solusi_bisnis']) : null,
    'layanan_and_user_perangkat_lunak' => isset($_POST['layanan_and_user_perangkat_lunak']) ? implode(', ', $_POST['layanan_and_user_perangkat_lunak']) : null,
    'layanan_and_user_perangkat_keras' => isset($_POST['layanan_and_user_perangkat_keras']) ? implode(', ', $_POST['layanan_and_user_perangkat_keras']) : null,
    'layanan_jaringan_komunikasi' => isset($_POST['layanan_jaringan_komunikasi']) ? implode(', ', $_POST['layanan_jaringan_komunikasi']) : null,
    'layanan_dukungan_pengguna' => isset($_POST['layanan_dukungan_pengguna']) ? implode(', ', $_POST['layanan_dukungan_pengguna']) : null,
];
// Ensure that all categories have at least one selected checkbox
foreach ($data as $key => $value) {
    if (is_null($value)) {
        echo "<script>
                alert('Please select at least one option in the " . str_replace('_', ' ', $key) . " category.');
                document.location='index.php';
              </script>";
        exit();
    }
}
// Create the SQL query with placeholders
$query = "INSERT INTO layanan (layanan_apk, layanan_solusi_bisnis, layanan_and_user_perangkat_lunak, layanan_and_user_perangkat_keras, layanan_jaringan_komunikasi, layanan_dukungan_pengguna) VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $koneksi->prepare($query);
if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($koneksi->error));
}

// Bind parameters to the SQL query
$stmt->bind_param(
    "ssssss", 
    $data['layanan_apk'], 
    $data['layanan_solusi_bisnis'], 
    $data['layanan_and_user_perangkat_lunak'], 
    $data['layanan_and_user_perangkat_keras'], 
    $data['layanan_jaringan_komunikasi'], 
    $data['layanan_dukungan_pengguna']
);

if (!$stmt->execute()) {
    die('Execute failed: ' . htmlspecialchars($stmt->error));
}

// Close the statement and connection
$stmt->close();
$koneksi->close();
if($query) {
    echo "<script>
                    alert('Simpan Data Berhasil');
                    document.location='../pertanyaan_umum/bagianb1.php';
        </script>";
    }else{
        echo "<script>
                    alert('Simpan Data Gagal');
                    document.location='header.php';
        </script>";
    }
?>
