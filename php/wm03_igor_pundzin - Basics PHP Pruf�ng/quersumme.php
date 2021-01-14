<?php

//   4.  Quersumme

function quersumme($int){
    $int=intval($int);              //Convertiert $int in integer weil die Aufgabe war 'quersumme(int $number)'
    $length=mb_strlen($int);        //Definiert $length für die schleife
    $sum=[];                        //Definiert $sum array für leichte summerizierung
    for($i=0;$i<$length;$i++){      //Die for Schleife läuft 1 mal für jeder nummer in $int
        $sum[$i]=intval(mb_substr($int, $i, 1));  // Diese zeile speichert jeder nummer
    }                                             //  in $int als ein neues integer in einer array
    return array_sum($sum);
}
