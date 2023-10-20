<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $angka1 = isset($_POST['angka1']) ? floatval($_POST['angka1']) : 0;
    $angka2 = isset($_POST['angka2']) ? floatval($_POST['angka2']) : 0;
    $operator = isset($_POST['operator']) ? $_POST['operator'] : '';

    if ($operator == '+') {
        $hasil = $angka1 + $angka2;
    } elseif ($operator == '-') {
        $hasil = $angka1 - $angka2;
    } elseif ($operator == '*') {
        $hasil = $angka1 * $angka2;
    } elseif ($operator == '/' && $angka2 != 0) {
        $hasil = $angka1 / $angka2;
    } else {
        $hasil = "Operasi tidak valid atau pembagian dengan nol.";
    }
} else {
    $hasil = "Silakan isi formulir terlebih dahulu.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Perhitungan</title>
</head>
<body>
    <h1>Hasil Perhitungan</h1>
    <p>Hasil dari operasi <?= $angka1 ?> <?= $operator ?> <?= $angka2 ?> adalah: <?= $hasil ?></p>
    <a href="form.html">Kembali ke Form</a>
</body>
</html>
