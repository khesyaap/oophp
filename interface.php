<?php

interface Buah {

    public function makan();
}

interface Benda {
    public function setUkuran($ukuran);
}

class Apel implements Buah , Benda{
    protected $warna;
    protected $ukuran; // property

    public function makan() {
        // kunyah
        // sampai bagian tengah
    }
    public function setWarna($warna) {
        $this->warna = $warna;
    }

    // variabel function/method
    public function setUkuran($ukuran){
        $this->ukuran = $ukuran;
    }
}

?>