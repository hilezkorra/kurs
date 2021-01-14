<?php

// HAS ALL LETTERS

/* 
function arrayleterchecker($arr){
        for($i=0; $i<trim(mb_strlen($arr[0])); $i++){
            $char=mb_substr($arr[1], $b, 1);
            if(mb_stripos($arr[0],$char)){
                $found=true;
            }else {$found = false;}  
        }
        if($found==true){ 
            return true;
        }else{
            return false;
        }
    }
 */

$letters=[];
function arrayleterchecker($arr){

    $length=mb_strlen($arr[1]);
for($i=0;$i<$length;$i++){
    $letter=mb_substr($arr[1],$i,1);
    if( mb_stripos($arr[0], $letter) === false){
        return false;
    }
}
return true;
}




/* 
    $found=true;
    for($i=0; $i<$length; $i++){ 
    $letters[$i]=trim(mb_substr($arr[1], $i, 1));
        for($b=0;$b<mb_strlen($arr[0]);$b++){
            var_dump($letters);
            
                $letters[$i]=trim(mb_substr($arr[1], $i, 1));

                if(mb_stripos($arr[0],$letters[$i]) === false){
                    $found=false;
                }

        }
            if($found==false){
                return false;
            }else{
                return true;
            }
    }*/

 
var_dump(arrayleterchecker(["Lagerregal", "regelart"]));       //=> false
var_dump(arrayleterchecker(["Tröte", "röte"]));                //=> true
var_dump(arrayleterchecker(["Antananarivo", "TonVariation"])); //=> true
var_dump(arrayleterchecker(["Bratwurst", "blutdurst"]));       //=> false