<?php
trait greeting{
    public function grt () {
        echo "Buongiorno!";
    }
}

trait greeting2 {
    public function grt2 () {
        echo "Ohayo Gozaimasu!";
    }
}
trait greeting3 {
    public function grt3 () {
        echo "Annyeong Hasimnika!";
    }
}
trait greeting4 {
    public function grt4 () {
        echo "Dobroye utro!";
    }
}
trait greeting5 {
    public function grt5 () {
        echo "Guten Morgen!";
    }
}

class Hello {
    use greeting;
}

class Hello2 {
    use greeting, greeting2;
}

class Hello3 {
    use greeting, greeting2, greeting3;
}

class Hello4 {
    use greeting, greeting2, greeting3, greeting4;
}

class Hello5 {
    use greeting, greeting2, greeting3, greeting4, greeting5;
}

//ini yang so many
// $obj = new Hello();
// $obj->grt();
// echo "<br>";

// $obj2 = new Hello2();
// $obj2->grt();
// $obj2->grt2();
// echo "<br>";

// $obj3 = new Hello3();
// $obj3->grt();
// $obj3->grt2();
// $obj3->grt3();
// echo "<br>";

// $obj4 = new Hello4();
// $obj4->grt();
// $obj4->grt2();
// $obj4->grt3();
// $obj4->grt4();
// echo "<br>";

// $obj5 = new Hello5();
// $obj5->grt();
// $obj5->grt2();
// $obj5->grt3();
// $obj5->grt4();
// $obj5->grt5();
// echo "<br>";


//ini buat yang sedikit
$obj = new Hello();
$obj->grt();
echo "<br>";

$obj2 = new Hello2();
$obj2->grt();
$obj2->grt2();
echo "<br>";

$obj3 = new Hello3();
$obj3->grt2();
$obj3->grt3();
echo "<br>";

$obj4 = new Hello4();
$obj4->grt3();
$obj4->grt4();
echo "<br>";

$obj5 = new Hello5();
$obj5->grt4();
$obj5->grt5();
echo "<br>";

?>