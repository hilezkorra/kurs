<?php declare(strict_types=1);

// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// CRUD
// C reate
// R ead
// U update
// D elete

// Datenbankverbindung herstellen
//                    host         user  pass  database   port
$db = mysqli_connect('localhost', 'root', '', 'todolist', 3306);

// Error Handling der Connection
if (mysqli_connect_errno()) {
    echo '<div>Es ist ein Fehler aufgetreten: '
        . mysqli_connect_error()
        . '</div>';
}

mysqli_set_charset($db, 'utf8mb4');

$errors = [];

$action = $_POST['action'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($action === 'create') {
        $name = $_POST['name'] ?? '';

        if ($name === '') {
            $errors['name'] = 'Cowardly refusing to create an empty todo.';
        }
    
        if (!$errors) {
            // CREATE //////////////////////////////////////////////
            ////////////////////////////////////////////////////////
    
            $name = mysqli_escape_string($db, $name);

            // user_id ist hier noch 'gefaket', also 'hardgecodet'
            $sql =  "INSERT INTO `todos` (`name`, `user_id`) ";
            $sql .= "VALUES ('$name', 1)";
    
            $success = mysqli_query($db, $sql);
    
            // Error Handling
            if (!$success || mysqli_errno($db)) {
                echo "<div>Da ist wohl etwas schief gelaufen: "
                    . mysqli_error($db) // Nur zur Demonstration im Kurs
                    . "</div>";
            }
        }    
    }

    if ($action === 'complete') {
        $id = (int) ($_POST['id'] ?? 0);

        $result = mysqli_query($db, "SELECT `completed` FROM `todos` WHERE `id` = $id");

        // Error Handling
        if (mysqli_errno($db)) {
            echo "<div>Da ist wohl etwas schief gelaufen: "
                . mysqli_error($db) // Nur zur Demonstration im Kurs
                . "</div>";
        }

        $todo = mysqli_fetch_assoc($result);
        $completed = $todo['completed'] ? '0' : '1';

        $sql = "UPDATE `todos` SET `completed` = $completed WHERE `id` = $id";

        mysqli_query($db, $sql);

        // Error Handling
        if (mysqli_errno($db)) {
            echo "<div>Da ist wohl etwas schief gelaufen: "
                . mysqli_error($db) // Nur zur Demonstration im Kurs
                . "</div>";
        }
    }

    if ($action === 'update') {
        $name = $_POST['name'] ?? '';

        if ($name === '') {
            $errors['name'] = 'Cowardly refusing to create an empty todo.';
        }
    
        if ($errors) {
            $action = 'edit';
        
        } else {
            // UPDATE ////////////////////////////////////////////////
            ////////////////////////////////////////////////////////
            $id = (int) ($_POST['id'] ?? 0);
            $name = mysqli_escape_string($db, $name);
            $sql = "UPDATE `todos` SET `name` = '$name' WHERE `id` = $id";

            mysqli_query($db, $sql);

            // Error Handling
            if (mysqli_errno($db)) {
                echo "<div>Da ist wohl etwas schief gelaufen: "
                    . mysqli_error($db) // Nur zur Demonstration im Kurs
                    . "</div>";
            }
        }
    }

    if ($action === 'delete') {
        // DELETE ////////////////////////////////////////////////
        ////////////////////////////////////////////////////////
        $id = (int) ($_POST['id'] ?? 0);

        $sql = "DELETE FROM `todos` WHERE `id` = $id";

        $success = mysqli_query($db, $sql);

        // Error Handling
        if (!$success || mysqli_errno($db)) {
            echo "<div>Da ist wohl etwas schief gelaufen: "
            . mysqli_error($db) // Nur zur Demonstration im Kurs
            . "</div>";
        }
    }
}


// READ ////////////////////////////////////////////////
////////////////////////////////////////////////////////

// Anfrage an die DB senden
$result = mysqli_query($db, 'SELECT * FROM `todos`');

// Error Handling
if (mysqli_errno($db)) {
    echo "<div>Da ist wohl etwas schief gelaufen: "
        . mysqli_error($db) // Nur zur Demonstration im Kurs
        . "</div>";
}

// Datensätze aus dem "Result" herausziehen
$todos = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist</title>
    <style>
        .todo-actions { display: inline-block; }
        .completed    { text-decoration: line-through; }
    </style>
</head>
<body>
    <h1>My Todos</h1>

    <form action="" method="POST">
        <div><?= $errors['name'] ?? '' ?></div>
        <input type="text" name="name" id="name">
        <button type="submit" name="action" value="create">Add Todo</button>
    </form>

    <ul>
        <?php foreach ($todos as $todo) : ?>
            <li>
                <?php if ($action === 'edit' && $_POST['id'] == $todo['id']) : ?>
                    <form class="todo-actions" action="" method="POST">
                        <input type="hidden" name="id" value="<?= $todo['id'] ?>">
                        <button type="submit" name="action" value="update">Save</button>
                        <button type="submit" name="action" value="cancel">Cancel</button>
                        <input type="text" name="name" value="<?= htmlspecialchars($todo['name']) ?>" id="name">
                    </form>
                <?php else : ?>
                    <form class="todo-actions" action="" method="POST">
                        <input type="hidden" name="id" value="<?= $todo['id'] ?>">
                        <button type="submit" name="action" value="complete">C</button>
                        <button type="submit" name="action" value="edit">E</button>
                        <button type="submit" name="action" value="delete">X</button>
                    </form>
                    <span class="<?= $todo['completed'] ? 'completed' : "" ?>">
                        <?= htmlspecialchars($todo['name']) ?>
                    </span>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
