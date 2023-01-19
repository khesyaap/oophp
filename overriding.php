<?php

class Siswi{
    function biodata(){
        echo "Khesya Amel ";
    }
    function ttl(){
        echo "Lahir di Bogor, 2 sept 2006 \n";
    }
}

//child class
//isi function disesuaikan dengan kebutuhan
class Mahasiswi extends Siswi{
    function ttl(){
        echo "Selamat Anda LOLOS di Harvard";
    }
}

$siswi = new Siswi;
$siswi->biodata();
$siswi->ttl();
$siswi2 = new Mahasiswi;
$siswi2->ttl();


?>