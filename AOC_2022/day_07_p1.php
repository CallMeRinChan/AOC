<?php

// this is a difficult one, ill make this one later, but i cant make any promises

ini_set("display_errors", 1);

$file = file_get_contents("inputs/input_day7.txt");
$inputs = explode("\n", trim($file));

$total = [];
$current = 0;
$currentDir = "";

// $ are user commands

// cd -> change directory
// cd x moves in one level
// cd .. moves out one level
// cd / switches to the outermost directory

// ls -> list
// 53302, chvtw.czb size, filename
// dir fml  dir, dirname

//echo intval($inputs[2]) . "<br/>";

foreach($inputs as $input){
    $current += intval($input);
    if(intval($input) == 0){
        if($current <= 100000) {
            $total[] = $current;
        }
        $current = 0;
    }
}

echo array_sum($total);