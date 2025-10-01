<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Fungsi PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f8fb;
            padding: 30px;
            color: #333;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        .hasil {
            background: #ffffff;
            border-radius: 15px;
            padding: 20px;
            width: 60%;
            margin: 20px auto;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
        }
        .judul {
            font-weight: bold;
            color: #16a085;
            font-size: 20px;
            margin-bottom: 8px;
        }
        .output {
            font-size: 18px;
            margin-bottom: 15px;
        }
        hr {
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

<h1>✨ Hasil Fungsi PHP ✨</h1>
<div class="hasil">
<?php
// 1. Fungsi untuk menentukan bilangan terbesar dari 2 bilangan
function terbesar($a, $b) {
    if ($a > $b) { return $a; } 
    else { return $b; }
}

// Contoh penggunaan
$bil1 = 100; 
$bil2 = 150;
echo "<div class='judul'>1️⃣ Bilangan Terbesar</div>";
echo "<div class='output'>Bilangan terbesar dari <b>$bil1</b> dan <b>$bil2</b> adalah: <span style='color:#e74c3c; font-weight:bold;'>" . terbesar($bil1, $bil2) . "</span></div>";
echo "<hr>";

// 2. Fungsi untuk menampilkan Tanggal, Bulan, dan Tahun sekarang menggunakan getdate()
function tampilkanTanggalSekarang() {
    $sekarang = getdate();
    return $sekarang['mday'] . "-" . $sekarang['mon'] . "-" . $sekarang['year'];
}
echo "<div class='judul'>2️⃣ Tanggal Sekarang (getdate)</div>";
echo "<div class='output'>Sekarang tanggal: <span style='color:#2980b9; font-weight:bold;'>" . tampilkanTanggalSekarang() . "</span></div>";
echo "<hr>";

// 3. Fungsi untuk menampilkan Tanggal, Bulan, dan Tahun sekarang menggunakan date()
function tampilkanTanggalFormat() {
    return date('d-m-Y');
}
echo "<div class='judul'>3️⃣ Tanggal Sekarang (date)</div>";
echo "<div class='output'>Tanggal sekarang (format d-m-Y): <span style='color:#27ae60; font-weight:bold;'>" . tampilkanTanggalFormat() . "</span></div>";
?>
</div>

</body>
</html>