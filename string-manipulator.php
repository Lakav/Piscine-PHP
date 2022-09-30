<?php
function lcwords($str) {
    $temp = '';

    $words = explode(' ', $str);

    foreach ($words as $word) {
        $word = ' ' . lcfirst($word);
        $temp .= $word;
    }

    return ltrim($temp);
}

function capsMe(string $x) :string
{
    return strtoupper($x);
}

function lowerMe(string $x) : string
{
    return strtolower($x);
}

    function upperCaseFirst(string $x) : string
{
    return ucwords($x);
}

function lowerCaseFirst(string $x) : string
{
    return lcwords($x);
}

function removeBlankSpace(string $x) : string
{
    return Trim($x);
}

?>