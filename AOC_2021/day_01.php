<?php

$file = file_get_contents("day_01_input.txt");
$nums = explode("\n", $file);

$changes = 0;

//print_r(array_count_values($nums));

foreach($nums as $number => $_){
    if($_ < $nums[$number+1]){
        $changes++;
    }
}

echo "$changes";