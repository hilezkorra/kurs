<?php
$errors=[];

if($_SERVER['REQUEST_METHOD']==='GET'){
  $celsius=$_GET['celsius'] ?? '';

  if($celsius===''){
    $errors['celsius'] = "Field can't be empty!";
  }elseif(!is_numeric($celsius)){
    $errors['celsius'] = "Celsius must be written in numbers!";
  }else{
    $fahrenheit=$celsius / 5 * 9 + 32;
  }
}


var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
   .error{
     background:black;
     color:red;
     max-width:160px;
     text-align:center;
   }
  </style>
</head>
<body>
<form action="sandbox_day6p2.php" method="GET">
<div class="form-group">
<label for="celsius">Temperature in Celsius</label>
<input type="text" name="celsius" id="celsius" value="<?= htmlspecialchars($celsius ?? '') ?>">
</div>
<div class="form-group">
 <button type="submit">Convert to Dummheit</button>
</div>
</form>
  <?php if (isset($fahrenheit)) :?>
  <div class="result">
    <p><?= htmlspecialchars($celsius) ?> C° is <?= htmlspecialchars($fahrenheit) ?> F° !</p>  
  </div>
<?php endif; ?>
<?php if (! isset($fahrenheit)) :?>
  <div class="result">
    <p>Please enter the Temperature in Celsius to convert into Fahrenheit.</p>  
  </div>
<?php endif; ?>
<div class="error"><?= $errors['celsius'] ?? '' ?></div>
</body>
</html>