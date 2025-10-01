<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Contoh Fungsi PHP</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f7fb;
        padding: 30px;
        color: #2c3e50;
    }
    h1 {
        text-align: center;
        color: #34495e;
        margin-bottom: 30px;
    }
    .card {
        background: #fff;
        border-radius: 15px;
        padding: 20px 30px;
        width: 70%;
        margin: 0 auto 25px auto;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .judul {
        font-size: 20px;
        font-weight: bold;
        color: #16a085;
        margin-bottom: 10px;
    }
    .hasil {
        font-size: 18px;
        margin-bottom: 10px;
    }
    .berhasil {
        color: #27ae60;
        font-weight: bold;
    }
    .gagal {
        color: #c0392b;
        font-weight: bold;
    }
    hr {
        margin: 20px 0;
        border: 1px solid #ecf0f1;
    }
    pre {
        background: #f0f4f8;
        padding: 10px;
        border-radius: 8px;
        overflow-x: auto;
        font-size: 14px;
    }
</style>
</head>
<body>

<h1>✨ Contoh Program Fungsi PHP ✨</h1>

<div class="card">
<?php
echo "<div class='judul'>1️⃣ MEMBUAT FUNGSI</div>";

function berhasil()
{
    echo "<span class='berhasil'>SELAMAT ANDA BERHASIL</span>";
}

function gagal()
{
    echo "<span class='gagal'>MAAF ANDA GAGAL</span>";
}

$nilai = 90;
echo "<div class='hasil'>Nilai Anda: <b>$nilai</b><br>Hasil: ";
if ($nilai >= 75) {
    berhasil();
} else {
    gagal();
}
echo "</div>";
?>
</div>

<div class="card">
<?php
echo "<div class='judul'>2️⃣ FUNGSI DENGAN PARAMETER</div>";

function jumlah($a, $b)
{
    return $a + $b;
}

$nilai1 = 10;
$nilai2 = 15;
$hasilJumlah = jumlah($nilai1, $nilai2);
echo "<div class='hasil'>$nilai1 + $nilai2 = <b>$hasilJumlah</b></div>";
?>
</div>

<div class="card">
<?php
echo "<div class='judul'>3️⃣ FUNGSI BAWAAN</div>";

$sekarang = getdate();
echo "<div class='hasil'>📆 Array hasil <code>getdate()</code>:</div>";
echo "<pre>";
print_r($sekarang);
echo "</pre>";

echo "<div class='hasil'>Sekarang tanggal: <b>" . $sekarang["mday"] . "</b></div>";
?>
</div>

</body>
</html>
