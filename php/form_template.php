<?php 

$errors = [];

if($_SERVER['REQUEST_METHOD']==='POST'){
  $input = $_POST['input'] ?? '';

  //Validating
  if($input===''){
    $errors['input'] = "The input can't be empty.";
  }
  if(! $errors){
    echo "ALLES OK!";
    $length=strlen($input);
  }

}
/* $input=$_POST['input'] ?? null;

if($input){
$length = strlen($input);
} */

var_dump($_POST);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Character Counter</title>
  <style>
    .error{color:red};
  </style>
</head>
<body>
<h1>Character Counter</h1>
  <form action="sandbox.php" method="POST">
    <div class="form-group">
    <div class="error"><?= $errors['input'] ?? '' ?></div>
      <label for="input"></label>
      <input type="text" name="input" id="input" value="<?= htmlspecialchars($input ?? '') ?>">
    </div>
    <div class="form-group">
      <button type="submit"> Count now!</button>
    </div>
  </form>
<?php if (isset($length)) : ?>
  <div>
  IYour input <?= htmlspecialchars($input) ?> contains <?= htmlspecialchars($length) ?> Characters.
  </div>
<?php endif; ?>
</body>
</html>