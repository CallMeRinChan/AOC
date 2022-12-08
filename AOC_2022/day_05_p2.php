<?php

ini_set("display_errors", 1);

$file = file_get_contents("inputs/input_day5.txt");
$inputs = explode("\n", $file);

// the arrays from the input file
$arr1 = ["N","R","G","P"];
$arr2 = ["J","T","B","L","F","G","D","C"];
$arr3 = ["M","S","V"];
$arr4 = ["L","S","R","C","Z","P"];
$arr5 = ["P","S","L","V","C","W","D","Q"];
$arr6 = ["C","T","N","W","D","M","S"];
$arr7 = ["H","D","G","W","P"];
$arr8 = ["Z","L","P","H","S","C","M","V"];
$arr9 = ["R","P","F","L","W","G","Z"];

// double array for easier use
$arr = [$arr1,$arr2,$arr3,$arr4,$arr5,$arr6,$arr7,$arr8,$arr9];

foreach($inputs as $input){
    $input = trim($input);
    $to = intval(substr($input, -1));
    $from = intval(substr($input, -6, 1));

    if(ctype_digit(substr($input, 5, 2))) { // if both characters are numbers
        $count = substr($input, 5, 2);
    }else{
        $count = substr($input, 5, 1);
    }

    $move = array_splice($arr[$from-1], -$count);
    $arr[$to-1] = array_merge($arr[$to-1], $move);
}

echo getTopItems($arr);

function getTopItems($arr) : string{
    $string = "";
    for($i=0;$i<count($arr);$i++){
        $string .= $arr[$i][count($arr[$i])-1];
    }
    return $string;
}