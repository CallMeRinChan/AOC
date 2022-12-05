<?php

ini_set("display_errors", 1);

$file = file_get_contents("inputs/input_day3.txt");
$inputs = explode("\n", $file);
//$inputs = ["wMqvLMZHhHMvwLHjbvcjnnSBnvTQFn", "ttgJtRGJQctTZtZT", "CrZsJsPPZsGzwwsLwLmpwMDw"];

$lettersFile = file_get_contents("inputs/alfabet.txt");
$letters = explode(" ", $lettersFile);

$total = 0;


for($a=0;$a<count($inputs);$a+=3) {
    $string = $inputs[$a];
    $string1 = $inputs[$a + 1];
    $string2 = $inputs[$a + 2];

    foreach ($letters as $letter) {
        if (str_contains($string, $letter) && str_contains($string1, $letter) && str_contains($string2, $letter)) {
            $total += getCharValue($letter);

            break;
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
