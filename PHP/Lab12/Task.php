<?php
$name = "programmer";
echo "Hello, {$name}" ;
echo "<hr>";
// ----------------------------------------
$x = 5 ;
$y = 10 ; 
$sum = $x + $y ;
$mul = $x * $y ; 
$sub = $x - $y ;
echo "{$x} + {$y} = $sum " ;
echo "<br>";
echo "{$x} * {$y} = $mul " ;
echo "<br>";
echo "{$x} - {$y} = $sub " ;
echo "<br>";
echo "<hr>";
// ----------------------------------------
$a = 1 ; 
$b = 2 ;
$c = 3 ;
$d = 4 ; 
$x = ($a * $b)-($c * $d) ; 
echo "Difference =  $x";
echo "<hr>";
// -----------------------------------------
$num1 = 13 ; 
$num2 = 12 ;
$Result =( $num1 % 10 )+ ($num2 % 10) ;
echo "{$Result}";
echo "<hr>";
// ----------------------------------------
$number = 3569;
$firstDigit = strval($number)[0];
echo ($firstDigit % 2 == 0) ? "EVEN" : "ODD"; 
echo "<hr>" ; 
// ---------------------------------------
$A = 22 ;
$B = 10 ; 
$K = 2 ; 
if( $A % $K == 0 && $B % $K == 0 ){
    echo "BOTH" ;
}elseif ($A % $K == 0 && $B % $K !== 0){
    echo "Memo" ;
}elseif ($A % $K !== 0 && $B % $K == 0){
    echo "Momo";
}else{
    echo "No One" ; 
}
echo "<hr>" ; 
// ----------------------------------------- << حل اخر >>
$A = 15;
$B = 7;
$K = 3;
$result = "";
switch (true) {
    case ($A % $K == 0 && $B % $K == 0):
        $result = "BOTH";
        break;
    case ($A % $K == 0 && $B % $K !== 0):
        $result = "Memo";
        break;
    case ($A % $K !== 0 && $B % $K == 0):
        $result = "Momo";
        break;
    default:
        $result = "No One";
}
echo $result;
echo "<hr>";
// -------------------------------------------
$number12 = 39 ; 
$tenDigit = $number12 / 10;
$unitDigit = $number12 % 10 ; 
if(($tenDigit % $unitDigit == 0) || ($unitDigit % $tenDigit == 0)){
    echo "Yes" ; 
}else {
    echo "No" ;
}
echo "<hr>" ;