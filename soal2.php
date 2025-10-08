<?php
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "<br><br>";

// 2. Hitung total nilai stok * harga untuk semua buah
$total = 0;
foreach ($buah as $item) {
    $total += $item[1] * $item[2];
}
echo "Total nilai stok semua buah: Rp " . $total;
?>
