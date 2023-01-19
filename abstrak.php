<?php

//keyword penggunaan abstrak kelas menggunakan abstrak Mobil

abstract class Mobile{
    public $setHarga;

    //dibawah ini abstract kelas
    abstract function spec();

    //dibawah ini bukan abstract kelas
    public function setHarga($setHarga){
        $this->setHarga($setHarga);
    }
}

class Audi extends Mobile{
    function spec(){
        $nama = "Nama Mobil : Audi,";
        $kapasitas = "Kapasitas 4 orang";

        //membuat output
        echo $nama;
        echo "\n";
        echo $kapasitas;
    }
}

// bisa menginisiasi si objek yaitu pada kelas trunanya

$audi= new Audi();
$audi->spec();

?>