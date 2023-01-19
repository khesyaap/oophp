<?php

abstract class Uniqlo{
    public $setharga;

    abstract function spec();

    public function setHarga($setHarga){
        $this->setHarga($setHarga);
    }
}
class Tshirt extends Uniqlo{
    function spec(){
        $name = "Name Tshirt : Uniqlo x Disney Sleeve Tshirt,";
        $rate = "4.9 *****";

        echo $name;
        echo ("\n");
        echo $rate;
    }
}

$tshirt = new Tshirt();
$tshirt->spec();



?>