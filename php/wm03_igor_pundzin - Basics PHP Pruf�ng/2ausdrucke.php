<?php
//Beispiel:
/* 
    "2" + 3  +  4 * 5
    "2" + 3  + (4 * 5)  // * hat höhere Rangfolge/bindet stärker als +
   ("2" + 3) + (4 * 5)  // + ist links-assoziativ
  (("2" + 3) + (4 * 5)) // die alles umschließende Klammer => jetzt auflösen
  ////////////////////////
  (("2" + 3) + 20     ) // rechte Klammer ausrechnen
  (( 2  + 3) + 20     ) // + verlangt Zahlen (int oder float)
  (  5       + 20     ) // linke Klammer auflösen
  (  25               ) // + ausrechnen
  25
 */
//Achte darauf, pro Zeile nur EINE Aktion auszuführen, also:
//- Klammer hinzufügen
//- Datentyp konvertieren
//- Klammer auflösen (= ausrechnen)

//a) 7 + 4 * 14 ** 5
echo "(A) <br><br>";
var_dump( 7 +  4 *  14 ** 5   );
var_dump( 7 +  4 * (14 ** 5)  );// '**' bindet am stärksten hier
var_dump( 7 + (4 * (14 ** 5)) );// '*' zweitstärkste
var_dump((7 + (4 * (14 ** 5))));// masterklammer
///////////////////////////////////
var_dump((7 + (4 * (14 ** 5))));
var_dump((7 + (4 *  537824  )));// '**' erst ausgerechnet
var_dump((7 +     2151296    ));// '*' 2. ausgerechnet
var_dump(       2151303       );// '+' 3. ausgerechnet

echo "<br> <hr> <br>";

//b) true && ['0'] && 'false' xor !'-1'
echo "(B) <br><br>";

var_dump(   true && ['0']  && 'false'  xor  !'-1'  );
var_dump(   true && ['0']  && 'false'  xor (!'-1') );// '!' die stärkste geht zuerst
var_dump(  (true && ['0']) && 'false'  xor (!'-1') );// '&&' am linksten geht zuerst
var_dump(( (true && ['0']) && 'false') xor (!'-1') );// '&&' dann die zweite 
var_dump((((true && ['0']) && 'false') xor (!'-1')));// 'xor' ist die schwächste. Masterklammer

///////////////////////////////////////
echo "<br>";

var_dump((((true && [ '0' ]) && 'false') xor (! '-1' )));//
var_dump((((true && [ '0' ]) && 'false') xor (! true )));// '!' convertiert string zum boolean. Nicht leeres string ist immer 'true'
var_dump((((true && [ '0' ]) && 'false') xor   false  ));// wegen '!', 'true' wird 'false'
var_dump((((true &&  true  ) && 'false') xor   false  ));// '0' ist zum true konvertiert
var_dump(((      true        && 'false') xor   false  ));// 'true && true' ist true
var_dump(((      true        &&  true  ) xor   false  ));//  'false' ist zum boolean 'true' konvertiert
var_dump((       true                    xor   false  ));// 'true && true' ist 'true'
var_dump((                       true                 ));// 'true xor false' ist true

echo "<br> <hr> <br>";

//c) (bool) 24 === !! '24' ** 10
echo "(C) <br><br>";

var_dump(  (bool) 24  ===  ! !  '24' ** 10    );//
var_dump(  (bool) 24  ===  ! ! ('24' ** 10)   );// '**' bindet zuerst
var_dump(( (bool) 24) ===  ! ! ('24' ** 10)   );// '(bool)' bindet gleich nach '**'
var_dump(( (bool) 24) ===  !(! ('24' ** 10))  );// '!' bindet danach
var_dump(( (bool) 24) === (!(! ('24' ** 10))) );// zweite '!' bindet nach die erste
var_dump((((bool) 24) === (!(! ('24' ** 10)))));// '===' comparison operator bindet zuletzt. Masterklammer


///////////////////////////////////////
echo "<br>";

var_dump((((bool) 24) === (!(!    ('24' ** 10)))));//
var_dump((((bool) 24) === (!(!    ( 24  ** 10)))));// '**' konvertiert '24' zum integer
var_dump((((bool) 24) === (!(!  63403381000000))));// '**' wird ausgerechnet - 6.3403381e+13
var_dump((   true     === (!(!  63403381000000))));// '(bool)' konvertiert 24 zum boolean 'true'
var_dump((   true     === (!(!       true     ))));// '!' will boolean, integer wird 'true'
var_dump((   true     === (!        false      )));// '!' dreht 'true' zum 'false'
var_dump((   true     ===            true       ));// '!' dreht 'false' zum 'true'
var_dump(                true                    );//  'true === true' ist true
