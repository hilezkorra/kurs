<?php declare(strict_types=1);

session_start();

unset($_SESSION['_user']);

header('Location: index.php');
exit();
