<?php

class Mobil {
    public $namaMerk;
    public function hello(){
        return "dari kelas mobil";
    }
}

$mobil = new Mobil();
echo $mobil->nameMerk = "Audi ";
echo $mobil->hello();

?>