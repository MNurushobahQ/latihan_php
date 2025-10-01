<?php
// 1. Fungsi untuk menentukan bilangan terbesar dari 2 bilangan
function terbesar($a, $b) {
    if ($a > $b) 
    {return $a;} 
    else {return $b;}
}

// Contoh penggunaan
$bil1 = 100;
$bil2 = 150;
echo "Bilangan terbesar dari $bil1 dan $bil2 adalah: " . terbesar($bil1, $bil2);
echo "<br><br>";

// 2. Fungsi untuk menampilkan Tanggal, Bulan, dan Tahun sekarang menggunakan getdate()
function tampilkanTanggalSekarang() {
    $sekarang = getdate();
    echo "Sekarang tanggal: " . $sekarang['mday'] . "-" . $sekarang['mon'] . "-" . $sekarang['year'];
}

tampilkanTanggalSekarang();
echo "<br><br>";

// 3. Fungsi untuk menampilkan Tanggal, Bulan, dan Tahun sekarang menggunakan date()
function tampilkanTanggalFormat() {
    echo "Tanggal sekarang (format d-m-Y): " . date('d-m-Y');
}

tampilkanTanggalFormat();
?>
