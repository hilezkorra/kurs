<?php

// Task 1

echo "Entry: 03\\\\1A0";
echo "John's new word of the day is \"Pazartesi\". ";
echo "Thanks for listening. \n \n";

// Task 2

$tar1 = 9.20;
$min1 = 0.248;
$res1 = $tar1 / $min1;
$tar2 = 12.80;
$min2 = 0.15;
$res2 = $tar2 / $min2 ;
echo "\n Die erste Tarife hat $res1 gesprächs minuten " ;
echo "\n Die zweite Tarife hat $res2 gesprächs minuten \n" ;
$var = readline('input how many minutes you need per month: ');
echo "\n Cost with Tarif 1 = ";
echo  $var * $min1;
echo "\n Cost with Tarif 2 = ";
echo $var * $min2, "\n \n"; 

// Task 3

$var1 = readline('input the first num: '); echo "\n";
$var2 = readline('input the second num: '); echo "\n";
$var3 = readline('input the third num: '); echo "\n";
$x = $var1 + $var2 + $var3;
echo $var1 + $var2 + $var3; echo "\n";
$inp = readline('input a num to multiply with: '); echo "\n";
echo $x * $inp ; echo "\n \n \n";


// Task 4

$a = readline('input a value(a): ');
$b = readline('input a value(b): ');
$c = $b;
$b = $a;
$a = $c;
echo "Variable a = $a and variable b = $b";


// Example

$num1 = readline('input a number(a): ');
$num2 = readline('input another number(b): ');

echo "\n $num1 - $num2 = ";
echo  $num1 - $num2;
echo "\n $num1 + $num2 = ";
echo $num1 + $num2; 
echo "\n $num1 * $num2 = ";
echo $num1 * $num2;
echo "\n $num1 / $num2 = " ;
echo $num1 / $num2;

?>