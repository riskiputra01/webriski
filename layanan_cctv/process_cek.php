<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pengguna_cctv = $_POST['pengguna_cctv'];

    // Process the form data here, such as saving it to a database or displaying a confirmation

    echo "Anda memilih: " . $pengguna_cctv;
}
