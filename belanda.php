<?php
include ('Negara/belanda.php');

class Belanda {
    private $test;
    public function __construct(){
        $this->test=new \OOPHP\Negara\Belanda;
        echo "Ibu Kota :  ".$this->test->ibukota("Amsterdam");
        echo "<br/>";
        echo "Bahasa : ".$this->test->bahasa("Bahasa resmi dalam Uni Beneluks dan Uni Eropa");
    }
}
$jalan = new Belanda();


?>