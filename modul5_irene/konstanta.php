<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>irene</title>
</head>
<body>

    <?php
define("PI", 3.14159);
define("GREETING", "Selamat datang!");

echo "Nilai PI adalah: " . PI . "<br>"; 
echo GREETING . "<br>"; 

const GRAVITASI = 9.8;
const SITE_NAME = "tio gacor788";

echo "Percepatan gravitasi: " . GRAVITASI . "<br>"; 
echo "Nama situs: " . SITE_NAME . "<br>"; 

function hitungLuasLingkaran($jari_jari) {
  return PI * $jari_jari * $jari_jari; 
}

$luas = hitungLuasLingkaran(10);
echo "Luas lingkaran: " . $luas;
?>
</body>
</html>