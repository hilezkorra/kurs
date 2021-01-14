<?php

echo 3 + 5; echo "=3+5";

//powershell

// Console = Shell = Terminal

// ls - list - in Powershel shows file list of current folder
// cd - change directory  - in Powershell it changes the directory you are in
// cd .\xampp\  - moves to xampp folder
// cd ..  - moves one folder back
// cd ../.. moves 2 folders back
//  ./ means current folder

// Tab completion (pressing tab will make a suggestion for the folder name)
// Ctrl-c - ends running programm

// dir - directory - cmd.exe (same as list in powershell)


/* 3 Goldene Regeln für Datei- und Ordnernamen
- keine Leerzeichen
- keine Sonderzeichen (kein ä, ü, ß, !, €, ... - OK sind Minus - und Unterstrich _)
- nur Kleinbuchstaben


Powershell
ls           - list - zeigt den Verzeichnisinhalt an
cd PATH      - change directory - wechselt in das Verzeichnis PATH
md PATH      - make directory - legt ein neues Verzeichnis PATH an
rd PATH      - remove directory - löscht das Verzeichnis PATH
php FILENAME - führt ein PHP Programm aus

Einführung
- Programmiersprache
    - Kann von Rechnern "verstanden" werden
    - Steuert den Rechner / die Maschine
    - Stark strukturiert
    - Absolut nicht fehlertolerant
    - Syntax: Grammatik, korrekte Schreibweise einer Sprache
    - Abstrakte Sprache
    - Wird verwendet, um Algorithmen auszudrücken
    - Beispiele:
        - PHP
            - Serverseitig
        - Javascript
            - Clientseitig (meist)
- Server
    - Bedienung, Kellner, der, der einen Service anbietet
    - Ein Computer (der PC, das Laptop, ...)
    - Aber auch ein Programm, das auf diesem Computer läuft,
        und den entsprechenden Service "implementiert"
    - Server ist für andere Geräte erreichbar
        meist über ein Netzwerk, zB das Internet
- Client
    - Kunde, der, der einen Service in Anspruch nehmen will
    - Ein Computer (PC, Laptop, Toaster mit Internetanschluss)
- Protokoll
    - gemeinsame Art der Kommunikation / Sprache
    - HTTP, FTP, SMTP, POP3, IMAP, SSH
- Port
    - Die "Wohnung" im "Serverhaus", in der der entsprechende
      Service "wohnt".
    - Der Webserver wohnt zB normalerweise in Wohnung 80
    - Der Browser "klingelt" also bei Wohnung 80, wenn er
      eine Webseite "haben will".
- Request

Aufgabe
// Gib mir die ersten 100 Primzahlen aus
    // Eine Primzahl ist eine Zahl,
    // die nur durch 1 und sich selbst teilbar ist
Algorithmus
// Fange bei 1 an bis 100 hoch zu zählen
    // Teile die aktuelle Zahl durch 
    //   alle darunter liegenden natürlichen Zahlen größer 1
    //   Lässt sie sich ohne Rest teilen, ist sie keine Primzahl
    //   sonst ist sie eine Primzahl

 Links
    https://kursor.birusch.de/ - Exercisor
    https://www.php.net/manual/en/langref.php - PHP Doku
    https://www.w3schools.com/php/ - W3C Tutorials

    Notes of the day
- PHP Tags        <?php
- Integer         10
- Ausgabe         echo
- Statement       ;
- Comments        //, /* */
/*
- Float           4.6
- Arithmetik      + - * /       8**2  (osam na kvadrat)
- Variable        $a, $_a, $3a, $A
- Zuweisung       =
- Eingabe         readline()
- Strings         "Bla", \n
- Interpolation   "It is $a"
- Escaping        \
- Strings         '', "", and mixes thereof
- Concat          .
- Comparisons     ==, !=, <, >, <=, >=
- Booleans        true, false
- KontrollStrukt  if, else, elseif



Kontrollstruktur "if"
$number = rand(-10, 10);
echo "$number\n";
if ($number > 0) {
    echo "Die Zahl ist positiv.";
} elseif ($number < 0) {
    echo "Die Zahl ist negativ.";
} else {
    echo "Die Zahl ist 0.";
}  


var_dump( strlen('abc') );
var_dump( strlen('äöü') );
var_dump( strlen('😀') );
var_dump( mb_strlen('abc') );
var_dump( mb_strlen('äöü') );
var_dump( mb_strlen('😀') );
echo "<hr>";
var_dump( substr('abcdef', 2, 2) );
var_dump( substr('äöüß', 1, 1) );
var_dump( mb_substr('äöüß', 1, 1) );
echo "<hr>";
var_dump( strtoupper('Hallo Pizza') );
var_dump( strtolower('Goodbye Lenin') );
var_dump( mb_strtoupper('äöüß') );
var_dump( mb_strtolower('äöüß') );
echo "<hr>";
var_dump( strpos('Otto Hotel', 'o') );
var_dump( strpos('Tröten löten', 'ö') );
var_dump( mb_strpos('Tröten löten', 'ö') );
var_dump( mb_strrpos('Tröten löten', 'ö') );
var_dump( mb_strpos('Tröten löten', 't') );
var_dump( mb_stripos('Tröten löten', 't') );
var_dump( mb_strripos('Tröten löten', 'T') );
echo "<hr>";
var_dump( trim(" \n ollo@home.ac   \t") );
var_dump( rtrim(" \n ollo@home.ac   \t") );
var_dump( ltrim(" \n ollo@home.ac   \t\n") );



2 Möglichkeiten Fehlermeldungen zu erzeugen:
// Prozedural
trigger_error("Alarm! Das geht so nicht!", E_USER_WARNING);

// Objektorientiert
throw new Exception("Alarm! Das geht so nicht!");

Praktisch für die Klammern und Auflösen Übungen
error_reporting(E_ERROR);


MySQL BASICS



function db_query($sql) {
    global $database;
    $result = mysqli_query($database, $sql);
    if (mysqli_errno($database)) {
        trigger_error("ERROR: " . mysqli_error());
    }
    return $result;
}
function db_delete($table, $id)
{
    $sql = '...........';
    db_query($sql);
}
db_insert([
    'title' => 'Kaffee',
    'content' => 'Ist toll', // .....
]);
function db_insert($table, array $data) {
}

<<<SQL
DELETE FROM `users` WHERE `id` = 1;
DELETE FROM `users` WHERE `id` < 10;
DELETE FROM `users` WHERE `id` IN (10, 15, 18, 21);
SELECT * FROM `todos` WHERE `id` IN (12, 156, 9, 81);
    (col1, col2, col3, ...)
    (val1, val2, val3, ...)
INSERT INTO `posts` (`title`, `content`, `user_id`, `board_id`)
             VALUES ('Keaffe', 'Ist toll',   12   ,   1)
UPDATE `posts` SET `title` = 'Tee!', `user_id` = 11 WHERE `id` = 12;
UPDATE `todos` SET `completed` = 0 WHERE `user_id` = 5;
UPDATE `todos` SET `completed` = 0 WHERE `id` IN (1, 3, 5);
col1 = val1, col2 = val2, col3 = val3, ....
SQL;



*/