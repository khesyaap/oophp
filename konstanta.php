<?php
//Materi Konstanta

// Method Define
// define('NAMA', 'Khesya');
// echo NAMA;


//CONTOH KONSTANTA
class Laptop{
    const DOLLAR = 14000;

    public function beliLaptop($harga){
        return "Beli Laptop Baru RP. " . $harga*self::DOLLAR;  
    }
}

//akses lewat objek
$laptop_baru = new Laptop();
echo $laptop_baru->beliLaptop(50000000);

//class
echo Laptop::DOLLAR;

echo __LINE__;

function coba(){
    return __FUNCTION__;
}
echo coba();

?>