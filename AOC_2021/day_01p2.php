<?php

$file = file_get_contents("day_01_input.txt");
$nums = explode("\n", $file);

$changes = 0;

//print_r(array_count_values($nums));

foreach($nums as $number => $_){
    if(isset($nums[$number+3])) {
        if ((intval($nums[$number]) + intval($nums[$number+1]) + intval($nums[$number+2]))  < (intval($nums[$number+1]) + intval($nums[$number+2]) + intval($nums[$number+3]))) {
            $changes++;
        }
    }
}

echo "$changes";