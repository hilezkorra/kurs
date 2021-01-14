<?php
    $todos = [
        'clean', 'shower', 'eat'
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($todos as $todo) : ?>
            <li><?= $todo ?></li>
        <?php endforeach; ?>
        <?php foreach ($todos as $todo) { ?>
            <li><?php echo $todo ?></li>
        <?php } ?>
    </ul>
</body>