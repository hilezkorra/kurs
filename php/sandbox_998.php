
<a href="sandbox.php">Nix</a>
<a href="sandbox.php?a=5&b=12">Addiere</a>
<a href="sandbox.php?a=2&b=2">Addiere</a>
<a href="sandbox.php?a=-34&b=346">Addiere</a>
<a href="sandbox.php?a=0&b=0">Addiere 0 und 0</a>
<?php
// Addiere zwei Zahlen
var_dump( $_GET );
// var_dump(isset($_GET['a']));
// var_dump(empty($_GET['a']));

if (isset($_GET['a']) && isset($_GET['b'])) {
    echo "Summe: " . ($_GET['a'] + $_GET['b']);
} else {
    echo "a oder b existieren nicht.";
}