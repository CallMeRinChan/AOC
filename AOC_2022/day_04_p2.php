<?php

ini_set("display_errors", 1);

$file = file_get_contents("inputs/input_day4.txt");
$inputs = explode("\n", $file);

$total = 0;

foreach($inputs as $task){
    $sides = explode(",", $task);
    $arr1 = explode("-",trim($sides[0])); // 0 is begin, 1 is end
    @$arr2 = explode("-", trim($sides[1]));

    @$range1 = range($arr1[0], $arr1[1]);
    @$range2 = range($arr2[0], $arr2[1]);

    $intersect = array_intersect($range1, $range2); // makes an array of intersecting array keys

    if(!empty($intersect)){
        $total++;
    }
}

echo $total;