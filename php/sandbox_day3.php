<?php

// TASK 1 ARRAY SUMME
/* 
$a=[];
$b=0;
for ($i=0; $i<10; $i++) {
    $a[$i]=rand(1,100);
    $b+=$a[$i];
    if($i<9){
    echo "  $a[$i]  +";
    }else{echo "  $a[$i]  ";
    }
}
echo "=  $b";
 */


 //   TASK 2 Kleinste Zahl im ARRAY

 /* 
 $counter = readline("How many random numbers should be generated:");
 $a=[];
 $min=100;
 for($i=0;$i<$counter;$i++){
    $a[$i]=rand(1,100);
    if($min>$a[$i]){$min=$a[$i];}
    echo "$a[$i] \n";
 }
 echo "Smallest num. Version with if: $min  \n\n";
 $min = min($a);
 echo "Smallest number. Version with array min: $min  \n\n"; #
 */


 //    TASK 3  Beispiel für unintuitive Rangfolge

/* var_dump( 2 * 4 * 5 + 6 );
var_dump( (2 * 4) * 5 + 6 );
var_dump( ((2 * 4) * 5) + 6 );
var_dump( (((2 * 4 )* 5) + 6) );

echo "\n\n";
var_dump( 128 % 12 / 2 / 2 ** 4 );
var_dump( 128 % 12 / 2 / (2 ** 4) );
var_dump( (128 % 12) / 2 / (2 ** 4) );
var_dump( ((128 % 12) / 2) / (2 ** 4) );
var_dump( (((128 % 12) / 2) / (2 ** 4)) );
 */

/* 
      $var = (3 < 5)  and false;
     ($var = (3 < 5)) and false; // = bindet am stärksten
    (($var = (3 < 5)) and false); // Masterklammer
    ///////////////////////////////////////
    (($var = (3 < 5)) and false);
    (($var =  true  ) and false); // < ausrechnen
    ( true            and false); // = ausrechnen
      false                     ; // and ausrechnen
    var_dump( $var ); 
*/
/* var_dump( '3.5' . 'e3'  >=  350 % 10  === true);
var_dump( '3.5' . 'e3'  >= (350 % 10) === true);
var_dump(('3.5' . 'e3') >= (350 % 10) === true);
var_dump((('3.5' . 'e3') >= (350 % 10)) === true);
var_dump(((('3.5' . 'e3') >= (350 % 10)) === true)); */
///////////////////////////////////////////////
/* 
var_dump(((('3.5' . 'e3') >= (350 % 10)) === true)); 
var_dump(((('3.5' . 'e3') >= (0)) === true));//modulo highest priority
var_dump(((('3.5e3') >= (0)) === true)); //String sum
var_dump((((3500) >= (0)) === true)); //Conver to int
 */


/* 
var_dump(42 . 5 . 3 * 10 + (bool) 5 ** 2 == '42531');
var_dump(42 . 5 . 3 * 10 + (bool) (5 ** 2) == '42531');
var_dump(42 . 5 . 3 * 10 + ((bool) (5 ** 2)) == '42531');
var_dump(42 . 5 . (3 * 10) + ((bool) (5 ** 2)) == '42531');
var_dump((42 . 5) . (3 * 10) + ((bool) (5 ** 2)) == '42531');
var_dump(((42 . 5) . (3 * 10)) + 8(bool) (5 ** 2)) == '42531');
var_dump((((42 . 5) . (3 * 10)) + ((bool) (5 ** 2)))== '42531');
var_dump((((42 . 5) . (3 * 10)) + ((bool) (5 ** 2)))== '42531');
var_dump(((((42 . 5) . (3 * 10)) + ((bool) (5 ** 2)))== '42531')); 
*/
//////////////////////////////////////////////////////////
/* 
var_dump(((((42 . 5) . (3 * 10)) + ((bool) (5 ** 2)))== '42531'));
var_dump(((((42 . 5) . (3 * 10)) + ((bool) (25)))== '42531')); // ** highest priority here
var_dump(((((42 . 5) . (3 * 10)) + (true))== '42531')); // 25 is converted to bool
var_dump(((((42 . 5) . (30)) + (true))== '42531')); // * is calculated
var_dump((((('425') . (30)) + (true))== '42531')); // 42 and 5 are converted into string and summarized
var_dump(((('42530') + (true))== '42531')); // 30 is also converted to string and sumerized with 425
var_dump(42531 == '42531'); //42530 and true are converted to int because of + 
var_dump(42531 == 42531); //42531 is converted into integer

 */

//  NICHT FERTIG
  /* var_dump('gruen' < 10 and ['wiese'] > 0 ? !! "wolf" : "lamm"); 
  var_dump('gruen' < 10 and ['wiese'] > 0 ? (!! "wolf") : "lamm"); 
  var_dump(('gruen' < 10) and (['wiese'] > 0) ? (!! "wolf") : "lamm"); 
  var_dump(('gruen' < 10) and (['wiese'] > 0) ? (!! "wolf") : "lamm");  */

//   TASK 4 Indexierte TODOS

/* 
$todos=[];
$todos[0]='Clean bathroom';
$todos[1]='Read a book';
$todos[2]='Harvest Strawberries';
$todos[3]='World Domination';
echo "First value in array: $todos[0]  \n\n";
$todo_count=count($todos);
echo "Number of values in array: $todo_count  \n\n";
$todo_count--;
echo "Last value in array: $todos[$todo_count]  \n\n";
$todos[0]='Clean bathroom and kitchen';
$last_element=array_pop($todos);
$todo_count=count($todos);
echo "Number of values in array after pop: $todo_count  \n\n";
array_splice($todos,1,1);

echo "<ul>\n<li>";
echo implode("</li>\n<li>", $todos);
echo "</li></ul>";
print_r($todos);
  */
