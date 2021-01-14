<?php declare(strict_types=1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// CRUD
// C reate
// R ead
// U update
// D elete
// Datenbankverbindung herstellen
$db = mysqli_connect('localhost', 'root', '', 'forum', 3306);
// TODO: Error Handling
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    if ($name === '' or $email === '' or $password === '') {
        $errors['name'] = 'Cowardly refusing to create an empty todo.';
    }
    if (!$errors) {
        // CREATE //////////////////////////////////////////////
        ////////////////////////////////////////////////////////
        // user_id ist hier noch 'gefaket', also 'hardgecodet'
        $sql =  "INSERT INTO `users` (`username`, `email`, `password`) ";
        $sql .= "VALUES ('$name', '$email', '$password')";
        $success = mysqli_query($db, $sql);
        // Error handling
    }
}


// READ ////////////////////////////////////////////////
////////////////////////////////////////////////////////
// Anfrage an die DB senden
$result = mysqli_query($db, 'SELECT * FROM `users`');
// TODO: Error Handling
// Datensätze aus dem "Result" herausziehen
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mammary Glands Appreciation Forum</title>
    <style>
      label{
        display:inline-block;
        width:100px;
      }
    </style>
</head>
<body>
    <h1>Mammary Glands Appreciation Forum</h1>
    <form action="" method="POST">
        <div><?= $errors['name'] ?? '' ?></div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <div><?= $errors['email'] ?? '' ?></div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <div><?= $errors['password'] ?? '' ?></div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button type="submit">Register</button>
    </form>
</body>
</html>
