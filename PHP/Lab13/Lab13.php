<?php

$num = 5 ; 
for ($i = 1; $i <= $num ; $i++){
    echo $i , "<br>" ;
}
echo "<hr>" ; 
// -------------------------------------
$n = 10 ; 
for ($i = 1; $i <= $n ; $i++){
    if ($i % 2 ==0 ){
        echo $i , "<br>";
    }
}
echo "<hr>" ; 
// -------------------------------------
$N = [1, 8, 5, 7, 5];

$maxNumber = max($N);

echo $maxNumber;
echo "<hr>" ; 
// -------------------------------------
$number = 15 ; 
$isPrime = true ; 
if($number <=1){
    $isPrime = false ;
}elseif($number == 2){
    $isPrime = true ;
}elseif($number %2 ==0){
    $isPrime = false ;
}else{
    $sqrt = sqrt($number); 
    for ($i = 3; $i <= $sqrt ; $i +=2){
        if($number % $i == 0){
            $isPrime = false ;
            break ;
        }       
    }
}
if($isPrime){
    echo "Yes";
}else{
    echo "No";
}
echo "<hr>" ; 
// -------------------------------------

// $Y = "12121";
$Y = "160";

$Y = rtrim($Y, '0');
$reversedN = strrev($Y);
echo $reversedN . "<br>";
if ($reversedN === strrev($reversedN)) {
    echo "YES";
} else {
    echo "NO";
}
echo "<hr>" ; 
// -------------------------------------

// $number1 = 6;
// $number1 = 7;
$number1 = 4;

for ($i = 1; $i <= $number1; $i++) {
    if ($number1 % $i == 0) {
        echo $i . "<br>";
    }
}
echo "<hr>" ; 
// -------------------------------------
$A = 4;
$B = 20;
$luckyNumbers = [] ; 
for($i = $A ; $i <= $B ; $i++) {
    $isLukey = true ; 
    $str = (string) $i;

    for($j = 0 ; $j < strlen($str) ; $j++) {
        if( $str[$j] != '4' && $str[$j] != '7' ) {
            $isLukey = false ;
            break ;
       }
    } 
    if( $isLukey ) {
        $luckyNumbers[] = $i ;
    }
}
if (count($luckyNumbers) > 0) {
    echo implode(' ', $luckyNumbers);
} else {
    echo -1;
}

echo "<hr>" ; 
// -------------------------------------
$M = 4 ; 
for ($i = 1; $i <= $M ; $i++){
   for ($j = 1; $j <= $i; $j++) {
    echo "*" ;
   }
   echo "<br>" ;
}