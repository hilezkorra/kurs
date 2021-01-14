<?php

//Umlaute

function has_umlauts($string){
    if(strlen($string)==mb_strlen($string)){
        return true;
    }else {return false;}
}


$string = readline("Enter a string:");

if (has_umlauts($string)) {
    echo "\n\nKeine Umlaute gefunden";
} else {
    echo "\n\nUmlaute gefunden";
}