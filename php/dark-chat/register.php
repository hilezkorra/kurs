<?php declare(strict_types=1);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$errors = [];

$db = mysqli_connect('localhost', 'root', '', 'anon-chat', 3306);
mysqli_set_charset($db, 'utf8mb4');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = mb_strtolower($_POST['name'] ?? '');
    $password = $_POST['password'] ?? '';
    $password_confirmation = $_POST['password_confirmation'] ?? '';


    if ($name === '') {
        $errors['name'] = "Please provide an name address.";
    }

    $sql = "SELECT `name` FROM `users` WHERE `name` = '" . mysqli_escape_string($db, $name) . "'";
    $result = mysqli_query($db, $sql);
    mysqli_free_result($result);

    if (mysqli_num_rows($result) > 0) {
        $errors['name'] = "This name already exists in our database.";
    }

    if (mb_strlen($password) <= 5) {
        $errors['password'] = "Passwords must be at least six characters long.";
    }

    if ($password === '') {
        $errors['password'] = "Please enter a password.";
    }

    if ($password !== $password_confirmation) {
        $errors['password'] = "The passwords do not match.";
    }

    if ($name === '') {
        $errors['name'] = "Please enter a username.";
    }

    if (!$errors) {
        $name = mysqli_escape_string($db, $name);
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $name = mysqli_escape_string($db, $name);

        $sql = "INSERT INTO `users` (`password`, `name`)"
            . " VALUES ('$hash', '$name')";
        
        mysqli_query($db, $sql);

        header('Location: index.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Chat Rooms</title>
    <style>
        body{
            padding-top:125px;
            background:black;
            color:white;
        }
        label{
            display:inline-block;
            width:200px;
        }
        input{ margin:10px;}
        .alert{color: red;}
        header{
          position:absolute;
          text-align:center;
          background:silver;
          border-bottom:4px solid grey;
          top:0;
          left:0;
          height:120px;
          width:100%;
          font-size:160%;
        }
        body img{
            z-index:-1;
            opacity:0.5;
            max-width:100%;
            position:absolute;
            right:0;
            top:150px;
        }
        form{
            width:300px;
            border:2px solid grey;
            text-align:center;
            padding:20px;
            z-index:1;
        }
        @media screen and (max-width:1400px){
            body img{
                width:50%;
            }
        }
    </style>
</head>
<body>
<header>
      <h1>Anonymous Chat Rooms</h1>
</header>
<h2>Register</h2>
    <form action="register.php" method="POST">
        <div class="">
            <?php if (isset($errors['name'])) : ?>
                <div class="alert"><?= $errors['name'] ?></div>
            <?php endif; ?>
            <label for="name">name</label>
            <input type="text" name="name" id="name" value="<?= $name ?? '' ?>">
        </div>
        <div class="">
            <?php if (isset($errors['password'])) : ?>
                <div class="alert"><?= $errors['password'] ?></div>
            <?php endif; ?>
            <label for="password">Password</label>
            <input type="text" name="password" id="password">
        </div>
        <div class="">
            <label for="password_confirmation">Password Confirmation</label>
            <input type="text" name="password_confirmation" id="password_confirmation">
        </div>
        <div class="">
            <button type="submit">Register</button>
        </div>
    </form>
    <p>Already have an account? Then go to the <a href="index.php">login page.</a></p>
    <img src="img/anonymous.png" alt="anonymous hacker organization logo">
</body>
</html>
