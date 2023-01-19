<?php

class Buku{

    public $judul = "judul";
    public $penulis = "penulis";
    public $penerbit = "penerbit";
    public $harga = 0;

    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function __destruct(){
        echo "<br>";
        echo " Destruct dijalankan";    
    }

    public function getLabel(){
        return "$this->judul, $this->penerbit";
    }

}

$buku1 = new Buku("Tentang Setelahnya", "Rey Mbayang", "Rey Mbayang", 100000);
// $buku1->judul = "Tentang Setelahnya";
// $buku1->penulis = "Rey Mbayang";
// $buku1->penerbit = "Rey Mbayang";
// $buku1->harga = 100000;

$buku2 = new Buku("Catatan Najwab", "Najwa Shihab", "Najwa Shihab", 99000);
// $buku2->judul = "Catatan Najwa";
// $buku2->penulis = "Najwa Shihab";
// $buku2->penerbit = "Najwa Shihab";
// $buku2->harga = 99000;

echo "Buku : " . $buku1->getLabel();
echo "<br>";
echo "Buku : " . $buku2->getLabel();

?>