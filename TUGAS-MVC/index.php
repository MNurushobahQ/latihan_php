<?php
require_once 'model/Buku.php';

// Ambil data dari Model
$daftar_buku = Buku::semuaBuku();

// Tampilkan ke View
include 'view/daftar_buku.php';
