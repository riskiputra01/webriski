<?php
include("../koneksi.php");
// Check the connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture the form data and prevent XSS by escaping special characters
    $kritik = htmlspecialchars($_POST['kritik']);
    $harapan = htmlspecialchars($_POST['harapan']);

    // Validate that the fields are not empty
    if (!empty($kritik) && !empty($harapan)) {
        // Prepare an SQL statement to prevent SQL injection
        $stmt = $koneksi->prepare("INSERT INTO tanggapan (kritik, harapan) VALUES (?, ?)");
        $stmt->bind_param("ss", $kritik, $harapan);

        // Execute the statement and check if it was successful
        if ($stmt->execute()) {
            echo "<script>
                alert('Simpan Data Berhasil');
                document.location='../index.php';
              </script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "<div style='text-align:center; margin-top:50px; color:red;'><h2>Please fill in all required fields.</h2></div>";
    }
}

// Close the database connection
$koneksi->close();
