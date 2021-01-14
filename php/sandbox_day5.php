    <?php

// WHICH CONTINENT IS THE CITY ON
/* 
$data = [
    'europe' => [
        "berlin",
        "copenhagen",
        "leeds",
        "sevilla"
    ],
    'asia' => [
      "vientiane",
      "tashkent",
      "fukuoka",
      "ende"
    ]
];
$input = readline("Input a city name(all lowercase):");
$found=false;
foreach($data as $continent=>$cities){
  foreach($cities as $city){
    if($city == $input){
      echo "$city is in $continent.";
      $found=true;
    }
  }
  
}
if(! $found){
  echo "\n\nThe city couldn't be found!";
}


foreach ($data as $continents => $cities){
  sort($cities);
  echo "\n\n\n\nCities in $continents : \n\n";
  foreach($cities as $city){
    echo "\n" . $city . "\n";
  }
}
 */

//  BALKONPFLANZEN
/* 
var_dump($_GET);

?>

<a href="sandbox_day5.php?type=chilli">Chilli</a>
<a href="sandbox_day5.php?type=cactus">Cactus</a>
<a href="sandbox_day5.php?type=turnip">Turnip</a>
<a href="sandbox_day5.php?type=carrot">Carrot</a>

<?php
$found=false;
foreach($_GET as $type => $plant){  
  ?><br><br><?php
  if ($plant=='chilli'){echo "Still under the bridge";$found=true;
  }elseif ($plant=='cactus'){echo "See: Balcony";$found=true;
  }elseif ($plant=='turnip'){echo "Steckbrübenfaxgeräte sind modern";$found=true;
  }elseif ($plant=='carrot'){echo "I can see clearly now";$found=true;
  }
}
if($found==false){echo "Not found.";}
 */

 //  Cocktail UBUNG




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
var_dump($_GET);
$cocktail_id=$_GET['id'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php foreach($menu as $cocktail) : ?>
  <div>
    <a href="sandbox_day5.php?id=<?= $cocktail['id']?>">Cuba Libre
      <?= $cocktail['name'] ?>
    </a>
    <?php if ($cocktail['id'] == $cocktail_id) : ?>
    <div style="margin-left: 2em">
      <a href="sandbox_day5.php">X</a>
      <?= implode(', ', $cocktail['ingredients']); ?>
    </div>
    <?php endif; ?>
  </div>
<?php endforeach; ?>

</body>
</html>
