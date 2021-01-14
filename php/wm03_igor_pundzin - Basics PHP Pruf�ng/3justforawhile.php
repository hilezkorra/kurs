<?php

for ($number = 15; $number >= 0; $number--) {
    echo "<p>$number: " . (($number % 2 === 0) ? 'even' : 'odd') . '</p>';
}

echo "<p>The End.</p>";
//////////////////////////////////
echo "<br><br><hr><br><br>";

$number=15;

while($number>=0){
    echo "<p>$number: " . (($number % 2 === 0) ? 'even' : 'odd') . '</p>';
    $number--;
}
echo "<p>The End.</p>";

//Die einzige Unterschied ist das ich $number bevor die Schleife definieren musste und
// am ende das $number-- stellen