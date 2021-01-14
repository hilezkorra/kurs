<?php declare(strict_types=1);


function html_escape(string $string, string $encoding = 'UTF-8') : string
{
    if ($string === '') {
        return '';
    }

    return htmlspecialchars($string, ENT_QUOTES, $encoding);
}


function e($string) : string
{
    return html_escape((string) $string);
}
