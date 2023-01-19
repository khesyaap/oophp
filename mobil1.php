<?php

class Mobil{

    public $nama = "nama";
    public $merk = "merk";
    public $warna = "warna";
    public $tipeMesin = "tipeMesin";
    public $kecepatanMaksimal = 0;

    public function tambahKecepatan() {

    }

    public function kurangiKecepatan(){
         
    }

    public function belokKiri(){
        
    }

    public function tambahKanan(){
        
    }

    public function sayHello(){
        return "Hello Adeeva";
    }

    public function getLabel(){
        return "$this->nama, $this->merk";
    }
}

$mobil_adeeva = new Mobil();
$mobil_adeeva->nama = "Lamborghini Aventador";
$mobil_adeeva->merk = "Lamborghini";
$mobil_adeeva->warna = "Abu";
$mobil_adeeva->kecepatanMaksimal = "2000";

//echo "Mobil Adeeva :". $mobil_adeeva ->nama, $mobil_adeeva ->merk;
//var_dump($mobil_adeeva);

echo $mobil_adeeva->sayHello();
echo $mobil_adeeva->getLabel();

$mobil_marsya = new Mobil();

var_dump($mobil_adeeva);








?>