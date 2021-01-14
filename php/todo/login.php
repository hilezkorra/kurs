<?php declare(strict_types=1);

$redirect_after_login = 'index.php';

$db = mysqli_connect('localhost', 'root', '', 'todolist', 3306);
mysqli_set_charset($db, 'utf8mb4');

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

session_start();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Please enter a valid email address.";
    }

    if ($email === '') {
        $errors['email'] = "Please provide an email address.";
    }

    if ($password === '') {
        $errors['password'] = "Please enter a password.";
    }

    if (!$errors) {
        $email = mysqli_escape_string($db, $email);
        
        $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $result = mysqli_query($db, $sql);
        $user = mysqli_fetch_assoc($result);
        mysqli_free_result($result);

        if (!$user) {
            $errors['email'] = "We don't know. Who are you?";
        }
    }

    if (!$errors) {

        if (!password_verify($password, $user['password'])) {
            $errors['email'] = "Your login data seems to be incorrect.";
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
    <title>Register</title>
    <style>
        .alert { color: red; }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <div class="">
            <?php if (isset($errors['email'])) : ?>
                <div class="alert"><?= $errors['email'] ?></div>
            <?php endif; ?>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?= $email ?? '' ?>">
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
</body>
</html>
