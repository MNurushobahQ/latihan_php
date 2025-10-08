<?php
$produk = [
    [
        "nama" => "Laptop",
        "kategori" => "Elektronik",
        "harga" => 10000000,
        "rating" => 4.8
    ],
    [
        "nama" => "Headphone",
        "kategori" => "Aksesoris",
        "harga" => 2000000,
        "rating" => 4.5
    ],
    [
        "nama" => "Smartphone",
        "kategori" => "Elektronik",
        "harga" => 7000000,
        "rating" => 4.7
    ]
];

// Cetak produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $tertinggi["harga"]) {
        $tertinggi = $p;
    }
}

echo "Produk dengan harga tertinggi:<br>";
echo "Nama: " . $tertinggi["nama"] . "<br>";
echo "Kategori: " . $tertinggi["kategori"] . "<br>";
echo "Harga: Rp " . $tertinggi["harga"] . "<br>";
echo "Rating: " . $tertinggi["rating"];
?>
