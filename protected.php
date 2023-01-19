<?php

class Mobile2{
    //parent class
    protected $namaMerk = "Nissan";
    protected function hellomobile(){
        return " dari kelas mobil";
    }
}

//membuat kelas warisan//child  class
class Mobile extends Mobile2{
    public function getmobile(){
        return $this->hellomobile() . " " .$this->namaMerk;
    }
}

$mobile2 = new Mobile();
echo $mobile2->getmobile();

?>