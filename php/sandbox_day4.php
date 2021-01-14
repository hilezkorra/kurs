<?php

//  PIZZA UBUNG


/* 
$pizza_1 = [
    'name'  => 'Margherita',
    'price' => 699
];

$pizza_2 = [
    'name'  => 'Funghi',
    'price' => 749
];

// 1
$menu = [];

// 2
$menu[] = $pizza_1;
$menu[] = $pizza_2;

// 3
echo $menu[0]['name'] . ", " . $menu[1]['name'] . "\n";

// 4
$menu[] = [
    'name'  => 'Diavoli',
    'price' => 799
];

// 5
$menu[0]['toppings'] = ['tomatoes', 'cheese'];

// 6
$menu[1]['toppings'] = ["tomatoes", "champignons", "cheese"];
$menu[2]['toppings'] = ["tomatoes", "peperoni", "salami", "cheese"];

// 7
$total = $menu[0]['price'] + $menu[1]['price'] + $menu[2]['price'];
echo "Durchschnittspreis: " . $total / 300 . "€\n";

// 8
$menu[2]['price'] *= 1.1;

// 9
unset($menu[1]);

// 10
unset($menu[2]['toppings'][2]);
var_dump($menu[2]['toppings']);

 */

//  Cocktail UBUNG



/* 
$menu = [
    [
        'id' => 1,
        'name'=> 'Cuba Libre',
        'price'=> 550,
        'ingredients'=> ['Cola', 'Rum', 'Lime juice']
    ],
    [
        'id' => 2,
        'name'=> 'Long Island Iced Tea',
        'price'=> 1000,
        'ingredients'=> ['Gin', 'Tequila', 'Vodka', 'Rum', 'Triple sec', 'Sour mix', 'Cola']
    ],
    [
        'id' => 3,
        'name'=> 'Mojito',
        'price'=> 650,
        'ingredients'=> ['Rum', 'Lime juice', 'Fresh mint', 'Sugar', 'Soda']
    ],
];


foreach ($menu as $cocktail) {
    echo $cocktail['name']
        . ' - '
        . number_format($cocktail['price'] / 100, 2)
        . "€\n";
}

$shopping_list = [];

foreach ($menu as $cocktail) {
    $shopping_list = array_merge($shopping_list, $cocktail['ingredients']);
}

$shopping_list = array_unique($shopping_list);
sort($shopping_list);

 */

//  ASSOZZIATIVE BENUTZER


/* 

// 1
$user = [];

// 2
$user['name'] = "Oliver";

// 3
$user['admin'] = false;

// 4
$users[] = $user;

// 5
$user = [
    'name' => 'Chuck Norris',
    'admin' => true
];

// 6
$users[] = $user;

// 7
$users[] = [
    'name' => 'Neo',
    'admin' => false
];

// 8
$users[] = [
    'name' => 'Linus',
    'admin' => true
];

// 9
$length = count($users);
echo "Admins: ";

for ($i = 0; $i < $length; $i++) {
    $user = $users[$i];

    if ($user['admin']) {
        echo $user['name'] . ", ";
    }
}
echo "\n";

// 10
$length = count($users);
$non_admins = 0;

for ($i = 0; $i < $length; $i++) {
    if (!$users[$i]['admin']) {
        $non_admins++;
    }
}
echo "$non_admins users are not admins.\n";

// 11
$users[0]['password'] = '12345';
$users[1]['password'] = '\'\'roundhouse\'\'';
$users[2]['password'] = 'quote"me\n!';
$users[3]['password'] = '<script>alert(\'Piep!\')</script>';

// 12
foreach ($users as $user) {
    echo $user['password'] . "\n";
}

// 13
if (strpos($users[1]['password'], '!') === false) {
    echo "Chuck Norris' Passwort hat kein Ausrufezeichen.\n";
}

// 14
$count = 0;

foreach ($users as $user) {
    if (strpos($user['password'], '!') !== false) {
        $count++;
    }
}

echo "$count Passwörter enthalten ein '!'\n"; 

*/