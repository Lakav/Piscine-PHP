<?php

function breakLines(string $str, int $i) : string
{
    return wordwrap($str, $i, "\n");
}

?>