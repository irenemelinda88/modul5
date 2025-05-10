<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>irene</title>
</head>
<body>
<?php
// Contoh 1: XOR dengan operator 'xor'
$is_member = true;
$has_coupon = false;

if ($is_member xor $has_coupon) {
  echo "Anda mendapatkan diskon khusus.";
} else {
  echo "Tidak ada diskon khusus.";
}

echo "<br>";

// Contoh 2: XOR dengan nilai boolean langsung
$kondisi1 = true;
$kondisi2 = true;

if ($kondisi1 xor $kondisi2) {
  echo "Hanya satu kondisi yang benar.";
} else {
  echo "Kedua kondisi sama (benar atau salah).";
}

echo "<br>";

// Contoh 3: XOR dengan integer (perlu diperhatikan)
$angka1 = 5; // Binary: 0101
$angka2 = 3; // Binary: 0011

if ($angka1 xor $angka2) {
    echo "Hanya satu angka yang ganjil (dalam representasi boolean)."; 
} else {
    echo "Kedua angka sama-sama ganjil atau sama-sama genap (dalam representasi boolean).";
}
echo "<br>";

//Contoh 4: XOR dengan string
$string1 = "Hello";
$string2 = "";

if ($string1 xor $string2){
    echo "Hanya satu string yang tidak kosong";
} else {
    echo "Kedua string sama-sama kosong atau sama-sama tidak kosong";
}
?>
</body>
</html>