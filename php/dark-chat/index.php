<?php declare(strict_types=1);

$redirect_after_login = 'categories.php';

$db = mysqli_connect('localhost', 'root', '', 'anon-chat', 3306);
mysqli_set_charset($db, 'utf8mb4');

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

session_start();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = mb_strtolower($_POST['name'] ?? '');
    $password = $_POST['password'] ?? '';


    if ($name === '') {
        $errors['name'] = "Please provide a name.";
    }

    if ($password === '') {
        $errors['password'] = "Please enter a password.";
    }

    if (!$errors) {
        $name = mysqli_escape_string($db, $name);
        
        $sql = "SELECT * FROM `users` WHERE `name` = '$name'";
        $result = mysqli_query($db, $sql);
        $user = mysqli_fetch_assoc($result);
        mysqli_free_result($result);

        if (!$user) {
            $errors['name'] = "We don't know. Who are you?";
        }
    }

    if (!$errors) {

        if (!password_verify($password, $user['password'])) {
            $errors['name'] = "Your login data seems to be incorrect.";
        }
    }

    if (!$errors) {
        
        $_SESSION['_user'] = $user;
        
        header("Location: $redirect_after_login");
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Anonymous Chatrooms</title>
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
    <h2>Login</h2>
    <form action="index.php" method="POST">
        <div class="">
            <?php if (isset($errors['name'])) : ?>
                <div class="alert"><?= $errors['name'] ?></div>
            <?php endif; ?>
            <label for="name">Name</label>
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
            <button type="submit">Login</button>
        </div>
    </form>
    <p>Don't have an account? Then go to the <a href="register.php">registration page.</a></p>
    <img src="img/anonymous.png" alt="anonymous hacker organization logo">
</body>
</html>
