<?php

function textlimiter($string, $int){
    $output='';
    if(mb_strlen($string)>$int){
        for($i=0;$i<$int;$i++){
           $output.=mb_substr($string, $i, 1);
        }
        $output.='...';
    }else{
        $output=$string;
    }
    return $output;
}


echo textlimiter('Paradox', 5);
echo "<br>";echo "<br>";
echo textlimiter('Now, this is a story all about how
My life got flipped-turned upside down
And I\'d like to take a minute
Just sit right there
I\'ll tell you how I became the prince of a town called Bel Air
In west Philadelphia born and raised
On the playground was where I spent most of my days
Chillin\' out maxin\' relaxin\' all cool', 191);
echo "<br>";echo "<br>";
echo textlimiter("This string may get truncated!", 16);
//=> This string m...
echo "<br>";echo "<br>";
echo textlimiter("Hallo", 2);
//=> Ha...
echo "<br>";echo "<br>";
echo textlimiter("Hold the Line", 15);
//=> Hold the Line