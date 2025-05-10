<!DOCTYPE html>
<html>
<head>
    <title>irene</title>
</head>
<body>

<h2>Daftar Nilai Mahasiswa</h2>

<form method="post" action="">
    Nama: <input type="text" name="nama" required><br><br>
    Kelas: <input type="text" name="kelas" required><br><br>
    Nilai: <input type="number" name="nilai" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $nilai = $_POST["nilai"];

    echo "<br>";
    echo "Nama: " . $nama . "<br>";
    echo "kelas: " . $kelas . "<br>";
    echo "Nilai: " . $nilai . "<br>";
    echo "Keterangan: ";

    if ($nilai > 80) {
        echo "A";
    } elseif ($nilai >= 70 && $nilai <= 79) {
        echo "B";
    } elseif ($nilai >= 60 && $nilai <= 69) {
        echo "C";
    } elseif ($nilai >= 50 && $nilai <= 59) {
        echo "D";
    } else {
        echo "Tidak Lulus";
    }
}
?>

</body>
</html>