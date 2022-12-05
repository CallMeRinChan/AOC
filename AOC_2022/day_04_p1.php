<?php

// this no worky yet, please be patient for i will update this at some point

ini_set("display_errors", 1);

// I made it a one-liner for the meme, don't worry I'm not THAT stupid
//$inputs = explode(",",implode(",",explode("\n", file_get_contents("inputs/input_day4.txt"))));
$file = file_get_contents("inputs/input_day4.txt");
$inputs = explode("\n", $file);

$cleaners = 0;

foreach($inputs as $task){
    $sides = explode(",", $task);
    $arr1 = explode("-",trim($sides[0])); // 0 is begin, 1 is end
    $arr2 = explode("-", trim($sides[1]));

    if($arr1[0] >= $arr2[0] && $arr1[1] <= $arr2[1]){
        $cleaners++;
    }elseif($arr1[0] <= $arr2[0] && $arr1[1] >= $arr2[1]){
        $cleaners++;
    }
}

echo $cleaners;