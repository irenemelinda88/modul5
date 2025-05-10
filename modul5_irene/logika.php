<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>irene</title>
</head>
<body>
    <?php
// Contoh 1: AND dengan operator &&
$umur = 20;
$punya_sim = true;

if ($umur >= 17 && $punya_sim) {
  echo "Boleh mengendarai kendaraan.";
} else {
  echo "Tidak boleh mengendarai kendaraan.";
}

echo "<br>";

// Contoh 2: AND dengan kata kunci 'and'
$nilai_ujian = 80;
$nilai_tugas = 75;

if ($nilai_ujian > 70 and $nilai_tugas > 70) {
  echo "Lulus.";
} else {
  echo "Tidak lulus.";
}

echo "<br>";

// Contoh 3: AND dalam kondisi yang lebih kompleks
$status_kerja = "karyawan";
$gaji = 5000000;
$masa_kerja = 2;

if (($status_kerja == "karyawan" or $status_kerja == "kontrak") and $gaji > 3000000 and $masa_kerja > 1) {
  echo "Memenuhi syarat untuk pinjaman.";
} else {
  echo "Tidak memenuhi syarat untuk pinjaman.";
}
?>
</body>
</html>