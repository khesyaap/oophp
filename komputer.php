<?php

// class Komputer{

//     public static $processor = "Core i5";

//     public static function memutar_video(){
//         return " Komputer memutar video" . self::$processor;
//     }
// }

// echo Komputer::$proccessor;
// echo Komputer::memutar_video();

// $komputer_khesya = new Komputer();
// echo $komputer_khesya->processor;
// echo $komputer_khesya->memutar_video();

class Nilai{
    public $angka = 1;

    public function halo(){
        return "Halo". $this->angka++ . "Kali <br>";
    }
}

$obj = new Nilai();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<br>";

$obj2 = new Nilai();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();


?>
