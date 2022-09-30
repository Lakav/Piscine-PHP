<?php

function reverse(string $x): string
{
return strrev($x);
}

function isPalindrome(string $x): bool
{
    $b =  strrev($x);
    $string_reverse = str_split($b);
    $palin = '';
    foreach($string_reverse as $value){

        $palin.= $value;
    }
    print $palin;
    if($x == $palin) {
        return true;
    }else {
        return false ;
    }
}

?>