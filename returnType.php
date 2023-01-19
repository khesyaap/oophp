<?php

// 1.Menggunakan Scalar Type
declare(strict_types=1);

// function setNumber(int $num){
//     echo $num;
// }

// setNumber("1");

//2. return type
// function getNumber() : int{
//     return 9;
// }
// echo getNumber();

//3. Menggunakan Array
function getNumber() : array{
    return [1,2,3];
}
print_r(getNumber());

?>