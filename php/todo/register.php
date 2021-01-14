<?php declare(strict_types=1);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$errors = [];

$db = mysqli_connect('localhost', 'root', '', 'todolist', 3306);
mysqli_set_charset($db, 'utf8mb4');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $password_confirmation = $_POST['password_confirmation'] ?? '';
    $name = $_POST['name'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Please enter a valid email address.";
    }

    if ($email === '') {
        $errors['email'] = "Please provide an email address.";
    }

    $sql = "SELECT `screenname` FROM `users` WHERE `email` = '" . mysqli_escape_string($db, $email) . "'";
    $result = mysqli_query($db, $sql);
    mysqli_free_result($result);

    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "This email already exists in our database.";
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
        $email = mysqli_escape_string($db, $email);
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $name = mysqli_escape_string($db, $name);

        $sql = "INSERT INTO `users` (`email`, `password`, `screenname`)"
            . " VALUES ('$email', '$hash', '$name')";
        
        mysqli_query($db, $sql);

        header('Location: login.php');
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
    <h1>Register</h1>
    <form action="register.php" method="POST">
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
            <label for="password_confirmation">Password Confirmation</label>
            <input type="text" name="password_confirmation" id="password_confirmation">
        </div>
        <div class="">
            <?php if (isset($errors['name'])) : ?>
                <div class="alert"><?= $errors['name'] ?></div>
            <?php endif; ?>
            <label for="name">Username</label>
            <input type="text" name="name" id="name" value="<?= $name ?? '' ?>">
        </div>
        <div class="">
            <button type="submit">Register</button>
        </div>
    </form>
    <p>Already have an account? Then go to the <a href="login.php">login page.</a></p>
</body>
</html>
