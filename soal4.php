<?php
$matriks = [
    [1, 5, 7],
    [3, 2, 9],
    [4, 6, 8]
];

// Cetak array dalam bentuk matriks
echo "Matriks 3x3:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriks[$i][$j] . " ";
    }
    echo "<br>";
}

// Hitung jumlah total semua elemen
$total = 0;
foreach ($matriks as $baris) {
    foreach ($baris as $elemen) {
        $total += $elemen;
    }
}
echo "<br>Jumlah total semua elemen: " . $total;
?>
