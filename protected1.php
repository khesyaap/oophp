<?php

class Fruit2{
    //parent class
    protected $namaBuah = "Grapee!";
    protected function hellofruit(){
        return " saya adalah buah";
    }
}

//membuat kelas warisan//child class
class Fruit extends Fruit2{
    public function getfruit(){
        return $this->hellofruit() . " " .$this->namaBuah;
    }
}

$fruit2 = new Fruit();
echo $fruit2->getfruit();

?>