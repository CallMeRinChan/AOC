<?php

ini_set("display_errors", 1);

// I made it a one-liner for the meme, don't worry I'm not THAT stupid
//$inputs = explode(",",implode(",",explode("\n", file_get_contents("inputs/input_day4.txt"))));
$file = file_get_contents("inputs/input_day4.txt");
$inputs = explode("\n", $file);

$cleaners = 0;

foreach($inputs as $task){
    $sides = explode(",", $task);
    $arr1 = explode("-",trim($sides[0])); // 0 is begin, 1 is end
    @$arr2 = explode("-", trim($sides[1]));

    $Start1 = $arr1[0];
    @$End1 = $arr1[1];
    $Start2 = $arr2[0];
    @$End2 = $arr2[1];

    $range1 = range($Start1, $End1);
    $range2 = range($Start2, $End2);

    if (in_array($Start1, $range2) && in_array($End1, $range2)) {
        $cleaners++;
    }elseif (in_array($Start2, $range1) && in_array($End2, $range1)) {
        $cleaners++;
    }
}

echo $cleaners;