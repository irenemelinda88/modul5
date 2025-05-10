<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>irene</title>
</head>
<body>
<?php

$R = 15;
$T = 50;

$volume = pi() * pow($R, 2) * $T;  

echo "<h2>Menghitung Volume Tabung</h2>";
echo "<p>Jari-jari (R): " . $R . "</p>";
echo "<p>Tinggi (T): " . $T . "</p>";
echo "<p>Volume Tabung: " . $volume . "</p>";
?>
</body>
</html>