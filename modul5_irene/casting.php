<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>irene</title>
</head>
<body>
<?php
$string_angka = "42";
$float_angka = 3.14;

// Type casting ke integer
$int_dari_string = (int) $string_angka;
$int_dari_float = (integer) $float_angka;

echo "Integer dari string: " . $int_dari_string . "<br>"; 
echo "Integer dari float: " . $int_dari_float . "<br>";   
?>
</body>
</html>