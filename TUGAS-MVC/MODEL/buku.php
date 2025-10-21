<?php
class Buku {
    public $judul;
    public $pengarang;
    public $tahun_terbit;

    public function __construct($judul, $pengarang, $tahun_terbit) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahun_terbit = $tahun_terbit;
    }

    public static function semuaBuku() {
        // Tambahkan 6 data buku
        $buku1 = new Buku("Logika Pembasmi Hama", "Usob", 2020);
        $buku2 = new Buku("Resep Puding Lele", "Kipli", 2019);
        $buku3 = new Buku("Horeg Spiritual", "Naruto", 2021);
        $buku4 = new Buku("Panduan doa", "Sasuke", 2018);
        $buku5 = new Buku("Madigol", "Kakasih", 2022);
        $buku6 = new Buku("Kejeniusan patrick", "Tsunade", 2023);

        return [$buku1, $buku2, $buku3, $buku4, $buku5, $buku6];
    }
}
