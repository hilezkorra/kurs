<?php

$data = [
    'one' => 'bir',
    'two' => 'iki',
    'three' => 'üç',
];

foreach ($data as $english => $turkish) {
    echo "<p>$english -> $turkish</p>";
}

echo "<br><hr><br>";
/////////////////////////////////////////////
$lol = [
    0 => 'one',
    1 => 'two',
    2 => 'three',
];
for($i=0;$i<3;$i++){
    echo $lol[$i];
    echo " -> "; 
    echo $data[($cheat=$lol[$i])];  
    echo "<br><br>";
}


// Muahahahahahahahaa!!!!!!! So this is how ultimate power feels like!!!

