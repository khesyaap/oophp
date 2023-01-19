<?php

class Fruit {
    private $namaBuah;
    private function hello(){
        return "Saya adalah buah";
    }
    //method untuk mengisi properti yang diprivate
    public function setnamaBuah($namaBuah){
    $this->namaBuah = $namaBuah;
 }
 //untuk mengambil nilai properti
 public function getprivate(){
    return $this->namaBuah . "" . $this->hello();
 }
}

$fruit = new Fruit();
$fruit->setnamaBuah("Applee!!");
echo $fruit->getprivate();

?>