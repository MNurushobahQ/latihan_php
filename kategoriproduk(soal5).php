<?php
$kategori = $_GET['kategori'] ?? 'other'; // contoh ?kategori=electronics

switch ($kategori) {
    case 'electronics':
        echo "Kategori: Elektronik — diskon 10%";
        // tampilkan layout tertentu / banner
        break;
    case 'fashion':
        echo "Kategori: Fashion — diskon 15%";
        break;
    case 'food':
        echo "Kategori: Makanan — free shipping";
        break;
    default:
        echo "Kategori lain — lihat koleksi kami";
        break;
}
?>
