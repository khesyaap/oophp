<?php

class DressShop{

    public $nama = "nama";
    public $merk = "merk";
    public $warna = "warna";
    public $tipeKain = "tipeKain";

    public function tambahStok() {

    }

    public function tambahDiskon(){
         
    }

    public function pesanAntar(){
        
    }

    public function ambilDitempat(){
        
    }

    public function sayHello(){
        return "Hello Khesya";
    }

    public function getLabel(){
        return "$this->nama, $this->merk";
    }
}

$dress_khesya = new DressShop();
$dress_khesya->nama = "Gloria Simply Pleated";
$dress_khesya->merk = "Gloria";
$dress_khesya->warna = "Cream";
$dress_khesya->tipeKain = "Katun";

echo $dress_khesya->sayHello();
echo $dress_khesya->getLabel();

var_dump($dress_khesya);



?>