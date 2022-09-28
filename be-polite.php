<?php

$hour = date('h');

if ($hour>=6 && $hour <= 12){
    echo "Hello! Have a nice day :)";
} elseif ($hour>=13 && $hour <= 18){
    echo "Have a good afternoon!";
}elseif ($hour>=13 && $hour <= 18){
    echo "Good evening! Hope you had a good day!";
}else{
    echo "Good night! See you tomorrow :)";
}

?>