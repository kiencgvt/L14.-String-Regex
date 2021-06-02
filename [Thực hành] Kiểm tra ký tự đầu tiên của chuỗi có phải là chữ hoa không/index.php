<?php

$regexp = '/^[A-Z]/';
isFirstLetterUpperCase('Codegym');
isFirstLetterUpperCase('cdegym');

function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo("String's first character is uppercase");
        echo '<br>';
    } else {
        echo("String's first character is not uppercase");
        echo '<br>';
    }
}
