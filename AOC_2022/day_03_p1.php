<?php

ini_set("display_errors", 1);

$file = file_get_contents("inputs/input_day3.txt");
$inputs = explode("\n", $file);

$lettersFile = file_get_contents("inputs/alfabet.txt");
$letters = explode(" ", $lettersFile);

$total = 0;


foreach($inputs as $string)
{
    $stringHalf = strlen($string)/2;
    $firstHalf = substr($string,0, $stringHalf);
    $secondHalf = substr($string, $stringHalf, $stringHalf);

    foreach($letters as $letter){
        if(str_contains($firstHalf,$letter)){
            if(str_contains($secondHalf,$letter)){
                $total += getCharValue($letter);
            }
        }
    }

    foreach($letters as $letter) {
        if (str_contains($firstHalf, $letter)) {
            if (str_contains($secondHalf, $letter)) {
                $total += getCharValue($letter);
            }
        }
    }
}

echo $total;

function getCharValue($char)  : int{
    if(ctype_lower($char)){
        return (ord($char) - 96);
    }else{
        return (ord($char) - 38);
    }
}
