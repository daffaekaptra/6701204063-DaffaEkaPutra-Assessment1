<?php
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];

if ($operator == '+') {
  $hasil = $angka1 + $angka2;
} elseif ($operator == '-') {
  $hasil = $angka1 - $angka2;
} elseif ($operator == '*') {
  $hasil = $angka1 * $angka2;
} elseif ($operator == '/') {
  $hasil = $angka1 / $angka2;
}

echo "Hasil: $hasil";
?>
