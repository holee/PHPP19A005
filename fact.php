<?php


$sum=0;
$fact=1;
// for($i=1;$i<=5;$i++){
//     $fact=$fact * $i;
//     $sum+=$fact;
// }

for($i=1;$i<=5;$i++){
    $fact=1;
    for($j=1;$j<=$i;$j++){
        $fact *=$j;
    }
    $sum +=$fact;
}

echo $sum;
