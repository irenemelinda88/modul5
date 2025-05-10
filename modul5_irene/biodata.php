
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>irene</title>
</head>
<body>
<?php
$nama = "irenemelinda";
$alamat = "JL.sigura gura blok h no 180";
$tanggal_lahir = "16 januari 2005";
$pekerjaan = "Mahasiswa";
$email = "irenemelinda88@gmail.com";
$telepon = "081286019301";

echo "<h2>Biodata</h2>";
echo "<p><strong>Nama:</strong> " . $nama . "</p>";
echo "<p><strong>Alamat:</strong> " . $alamat . "</p>";
echo "<p><strong>Tanggal Lahir:</strong> " . $tanggal_lahir . "</p>";
echo "<p><strong>Pekerjaan:</strong> " . $pekerjaan . "</p>";
echo "<p><strong>Email:</strong> " . $email . "</p>";
echo "<p><strong>Telepon:</strong> " . $telepon . "</p>";

// Atau bisa juga menggunakan print
print "<h2>Biodata (Menggunakan print)</h2>";
print "<p><strong>Nama:</strong> " . $nama . "</p>";
print "<p><strong>Alamat:</strong> " . $alamat . "</p>";
print "<p><strong>Tanggal Lahir:</strong> " . $tanggal_lahir . "</p>";
print "<p><strong>Pekerjaan:</strong> " . $pekerjaan . "</p>";
print "<p><strong>Email:</strong> " . $email . "</p>";
print "<p><strong>Telepon:</strong> " . $telepon . "</p>";
?>
    <script src="" async defer></script>
</body>
</html>