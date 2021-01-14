<?php declare(strict_types=1);
    $a = (string) ($_GET['a'] ?? rand(0, 100));
    $b = (string) ($_GET['b'] ?? rand(1, 100));
    $correct = false;
    $errors = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $answer = $_POST['answer'] ?? '';
        $answer = str_replace(',', '.', $answer);
        if (!is_numeric($answer)) {
            $errors['answer'] = "$answer verstehe ich leider nicht.";
        }
        if ($answer === '') {
            $errors['answer'] = "Bitte geben Sie ihre Antwort ein.";
        }
        if (!$errors) {
            $correct = round(($a / $b), 2) == round($answer, 2);
            if ($correct) {
                $a = (string) rand(1, 100);
                $b = (string) rand(1, 100);
            }
        }
    }
    var_dump( $_POST );
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form { display: inline-block; }
    </style>
</head>
<body>
    <div>
        <div><?= htmlspecialchars($errors['answer'] ?? '') ?></div>
        <?= htmlspecialchars($a) ?> / <?= htmlspecialchars($b) ?>
        <form action="<?= htmlspecialchars("sandbox.php?a=$a&b=$b") ?>" method="POST">
            <input type="text" name="answer" id="answer">
            <button type="submit">Testen</button>
        </form>
    </div>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$errors) : ?>
        <?php if ($correct) : ?>
            Richtig! Das Ergebnis ist <?= round($answer, 2) ?>
        <?php else: ?>
            Falsch! <?= htmlspecialchars($a) ?> / <?= htmlspecialchars($b) ?> ist NICHT <?= htmlspecialchars($answer) ?>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>

