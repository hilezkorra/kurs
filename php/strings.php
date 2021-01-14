<?php
/* 
echo "blabla<br>";

function add($a, $b){
  return $a + $b;  
}

echo "before call";
echo add(3,5);
echo "after call";
 */

 /* 
function ctof_deg($celsius){
    return $celsius * 1.8 + 32;
}

$celsius=rand(-20,40);
echo "morgen wird's $celsius C° und " . ctof_deg($celsius) . "F°";
 */
/* 
 function factorial($number){
     $result=1;
     for($i = $number; $i>=1;$i--){
         $result *= $i;
     }
     return $result;
 }

 echo factorial(3);

  */



var_dump( strlen('abc') );
var_dump( strlen('äöü') );
var_dump( strlen('😀') );
var_dump( mb_strlen('abc') );
var_dump( mb_strlen('äöü') );
var_dump( mb_strlen('😀') );
echo "<hr>";
var_dump( substr('abcdef', 2, 2) );
var_dump( substr('äöüß', 1, 1) );
var_dump( mb_substr('äöüß', 1, 1) );
echo "<hr>";
var_dump( strtoupper('Hallo Pizza') );
var_dump( strtolower('Goodbye Lenin') );
var_dump( mb_strtoupper('äöüß') );
var_dump( mb_strtolower('äöüß') );
echo "<hr>";
var_dump( strpos('Otto Hotel', 'o') );
var_dump( strpos('Tröten löten', 'ö') );
var_dump( mb_strpos('Tröten löten', 'ö') );
var_dump( mb_strrpos('Tröten löten', 'ö') );
var_dump( mb_strpos('Tröten löten', 't') );
var_dump( mb_stripos('Tröten löten', 't') );
var_dump( mb_strripos('Tröten löten', 'T') );
echo "<hr>";
var_dump( trim(" \n ollo@home.ac   \t") );
var_dump( rtrim(" \n ollo@home.ac   \t") );
var_dump( ltrim(" \n ollo@home.ac   \t\n") );
echo "<hr>";
var_dump('a'==='A');
$a=null;
var_dump(isset($a));