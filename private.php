<?php

class Mobil {
    private $namaMerk;
    private function hello(){
        return "dari kelas mobil";
    }
    //method untuk mengisi properti yang diprivate
    public function setnamaMerk($namaMerk){
    $this->namaMerk = $namaMerk;
 }
 //untuk mengambil nilai properti
 public function getprivate(){
    return $this->namaMerk . "" . $this->hello();
 }
}

$mobil = new Mobil();
$mobil->setnamaMerk("Nissan");
echo $mobil->getprivate();

?>