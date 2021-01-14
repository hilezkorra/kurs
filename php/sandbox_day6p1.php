<?php
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
$found=false;
$errors=[];
if($_SERVER['REQUEST_METHOD']==='POST'){
  $input=$_POST['input'] ?? '';

  if($input===''){
    $errors['input']="The input can't be empty.";
  }
  if(! $errors){
    foreach($data as $continent=>$cities){
      foreach($cities as $city){
        if($city == $input){
          $con=$continent;
          $found=true;
        }
      }
      
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>City/Continent</title>
  <style>
    .error{color:red};
  </style>
</head>
<body>
  <form action="sandbox_day6p1.php" method="POST">
    <div class="form-group">
      <div class="error"><?= $errors['input'] ?? '' ?></div>
      <label for="input">Input city:</label>
      <input type="text" name="input" id="input" value="<?= htmlspecialchars($input ?? '') ?>">
    </div>
    <div class="form-group">
      <button type="submit">Check continent</button>
    </div>
  </form>
  <?php if($found===true) :?>
    <div>
      <p><?= htmlspecialchars($input) ?> is in <?= htmlspecialchars($con) ?>.</p>
    </div>
<?php endif; ?>
<?php 
  if($found!==true and !$errors){
    echo "\n\nThe city couldn't be found inside our database!";
  }

?>
</body>
</html>