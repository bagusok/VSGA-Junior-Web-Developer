<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Segitiga</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="alas" id="alas" placeholder="Masukkan Alas" required>
        <input type="text" name="tinggi" id="alas" placeholder="Masukkan Tinggi" required>

        <button type="submit" name="submit">Hitung</button>

    </form>

</body>

</html>

<?php
function luas_segitiga($alas, $tinggi)
{
    return 1 / 2 * $alas * $tinggi;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];

    if (isset($alas) && isset($tinggi)) {
        echo "Luas Segitiga dengan Alas : $alas, dan Tinggi : $tinggi adalah " . luas_segitiga($alas, $tinggi);
    } else {
        echo "Masukkan Alas dan Tinggi";
    }
}

?>