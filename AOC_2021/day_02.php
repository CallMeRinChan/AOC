<?php

$file = file_get_contents("day_02_input.txt");
$nums = explode("\n", $file);

$horizontal = 0;
$depth = 0;

foreach($nums as $number => $_){
    if (substr($nums[$number], 0, -2) == "forward") {
        $horizontal += intval(substr($nums[$number],-1));
    }
    if (substr($nums[$number], 0, -2) == "up") {
        $depth -= intval(substr($nums[$number],-1));
    }
    if (substr($nums[$number], 0, -2) == "down") {
        $depth += intval(substr($nums[$number],-1));
    }
}

echo "$horizontal * $depth = " . $horizontal * $depth;