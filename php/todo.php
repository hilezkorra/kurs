<?php declare(strict_types=1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// CRUD
// C reate
// R ead
// U update
// D elete
// Datenbankverbindung herstellen
$db = mysqli_connect('localhost', 'root', '', 'todolist', 3306);
// TODO: Error Handling
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    if ($name === '') {
        $errors['name'] = 'Cowardly refusing to create an empty todo.';
    }
    if (!$errors) {
        // CREATE //////////////////////////////////////////////
        ////////////////////////////////////////////////////////
        // user_id ist hier noch 'gefaket', also 'hardgecodet'
        $sql =  "INSERT INTO `todos` (`name`, `user_id`) ";
        $sql .= "VALUES ('$name', 1)";
        $success = mysqli_query($db, $sql);
        // Error handling
    }
}

// READ ////////////////////////////////////////////////
////////////////////////////////////////////////////////
// Anfrage an die DB senden
$result = mysqli_query($db, 'SELECT * FROM `todos`');
// TODO: Error Handling
// Datensätze aus dem "Result" herausziehen
$todos = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
</head>
<body>
    <h1>My Todos</h1>
    <form action="" method="POST">
        <div><?= $errors['name'] ?? '' ?></div>
        <input type="text" name="name" id="name">
        <button type="submit">Add Todo</button>
    </form>
    <ul>
        <?php foreach ($todos as $todo) : ?>
            <li><?= $todo['name'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

