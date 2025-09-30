<?php
echo "<h2>Menentukan Bilangan Ganjil dan Genap 1 - 50</h2>";

// Menggunakan perulangan FOR
for ($i = 1; $i <= 50; $i++) {
    echo "Angka: $i - ";

    // Menggunakan IF ELSE untuk mengecek ganjil atau genap
    if ($i % 2 == 0) {
        echo "Genap";
    } else {
        echo "Ganjil";
    }

    // Menggunakan SWITCH untuk memberi keterangan tambahan
    switch (true) {
        case ($i % 5 == 0):
            echo " (Kelipatan 5)";
            break;
        case ($i % 3 == 0):
            echo " (Kelipatan 3)";
            break;
        default:
            echo " (Bukan kelipatan 3 atau 5)";
    }

    echo "<br>";
}
?>
