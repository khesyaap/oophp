<?php

class Fruit{
    public $namaBuah;
    public function hello(){
        return " saya adalah buah...";
    }
}

$fruit = new Fruit();
echo $fruit->nameBuah = "Manggoo!";
echo $fruit->hello();

?>