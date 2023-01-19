<?php
// function iteration(int $num, int $index = 1){
//     echo "Proses ke-{$index}\n";

//     // istilah mencapai akhir untuk dioutputkan
//     // pada code ($index < $num)

//     if ($index < $num){
//         iteration($num, $index + 1);
//     }
// }

// iteration(10);

// Menggunakan Perulangan
function iteration(int $num){
    for ($i = 1; $i <= $num; $i++){
        echo "Perulangan ke-{$i}\n";
    }
}
iteration(10);


?>