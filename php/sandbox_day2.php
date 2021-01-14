<?php

// Task 1

/* 

echo "This function will divide 2 numbers! \n \n";

do{
$var1 = readline('input the number to divide: '); echo "\n";
$var2 = readline('input the amount it is devided by: ');echo "\n";
if ($var1 == 0 or $var2 == 0){
echo "YOU CAN NOT DIVIDE WITH 0! Please use a different numeber. \n \n";    
}
} while($var1 == 0 or $var2 == 0);

echo "\n", $var1 / $var2;
 

 */
// Task 2

/* echo "\n\n\n\nThis Program will calculate Newtons into kilopounds and viceversa. \n \n";
do {
    $cmd = readline('Newtons to kilopounds = "nk"   Kilopounds to Newtons = "kn": '); echo "\n";
    if ($cmd == 'nk') {
    $val = readline('Enter the amount of Newtons that have to be converted to kilopounds:'); echo "\n \n";
    $kp = $val / 9.80665; 
    echo "$val Newtons is $kp kilopounds!";
    } elseif ($cmd == 'kn') {
    $val = readline('Enter the amount of Kilopounds that have to be converted to Newtons:'); echo "\n \n";
    $n = $val * 9.80665;
    echo "$val kilopounds is $n Newtons!";  
    } else
        echo "Invalid value! I don't understand! You are BAKA! \n \n \n";
} while ($cmd !== 'nk' and $cmd !== 'kn');   */

// Task 3

/* echo "\n\n\n\nThis Program will prove if two inputs have the same number at the end. \n \n";

$var1 = readline('input the first number: '); echo "\n";
$var2 = readline('input the second number: ');echo "\n";
if ($var1 % 10 == $var2 % 10){
    echo "$var1 and  $var2 both end with the same number at the end";
}else{ echo ("They end with different numbers");} */

// Task 4

/* echo "\n\n\n\nThis Program will compare 4 valus and display the smallest. \n \n";

$var=array(
    $var1 = readline('input the first number: '),
    $var2 = readline('input the second number: '),
    $var3 = readline('input the third number: '),
    $var4 = readline('input the fourth number: ')
);
$smallest= min($var);
echo "The smallest number is $smallest"; */


// Task 5

echo "\n\n\n\nThis Program is supposed to be true for all 7 questions. \n \n";



if(11 * (7 - 3) == 44){echo "true \n\n" ;}else {echo "false \n\n";}


if((11 % 3) ** 3 === 8){echo "true \n\n" ;}else {echo "false \n\n";}


if((3 + ".14") * 4 === 12.56){echo "true \n\n" ;}else {echo "false \n\n";}


if(3 * (4 + 8) / 2 === 18){echo "true \n\n" ;}else {echo "false \n\n";}


if(true and false xor !(true and false)){echo "true \n\n" ;}else {echo "false \n\n";}


if(true xor (true xor true) and false){echo "true \n\n" ;}else {echo "false \n\n";}


if(!(null) ? false : false){echo "true \n\n" ;}else {echo "false \n\n";}


//   Task 6

/* 
echo "\n\n\n\nThis Program will calculate if a year is a Schaltjahr. \n \n";


$var1 = readline('input the year: ');echo "\n";
if($var1 % 4 == 0 and $var1 %100 != 0 or ($var1 % 4 == 0 and $var1 % 100 == 0 and $var1 % 400 == 0)){
    echo "Schaltjahr\n";
} else {echo "Nicht Schaltjahr";} 

*/

//  Task 7

/* echo "\n\n\n\nThis Program will check if Stay is true or not. \n \n";

$stay = rand(0,1);
echo "Should I stay or should I go?\n\n";
if ($stay==true){echo "Stay!";} else{echo "Go!";} */

//   Task 7

echo "\n\n\n\nThis Program will tell you how much time there is until the next bus leaves. \n \n";
$i=60;
do{
$h = readline('input the hour(1-24 Hour format): ');
echo "\n\n";
if($h>24 or $h<1){echo "A day only has 24 hours!? \n\n";}
}while($h>25 or $h<1);

do{
$m = readline('input the minutes: ');echo "\n\n";
if($m>$i or $m<0){echo "An hour only has 60 minutes!";}
} while ($m > $i);
if($m % 15 == 0 or $m == 0){
    echo "The bus just left. The next one leaves in 15 minutes. \n\n";
    }
if ($i - $m < 16){
        $h++;
        if($h==25){$h=0;}
        echo "The next bus leaves at exactly $h : 00 o'clock";
    }elseif ($i - $m > 45){
        echo "The next bus leaves at $h : 15 o'clock";
    }elseif ($i - $m > 30) {
        echo "The next bus leaves at $h : 30 o'clock";
    }elseif ($i - $m > 15) {
        echo "The next bus leaves at $h : 45 o'clock";
    }
 


