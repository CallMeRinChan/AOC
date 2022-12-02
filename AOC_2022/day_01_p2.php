<?php

ini_set("display_errors", 1);

$file = file_get_contents("inputs/input_day1.txt");
$inputs = explode("\n", $file);

$elves = [];
$currentElf = 0;
$elf = 0;

foreach($inputs as $input) // krijg elke input
{

    $currentElf += intval($input);
    if(empty($input)){
        $elves[$elf] = $currentElf;
        $currentElf = 0;
        $elf++;
    }
}

rsort($elves);
echo $elves[0] + $elves[1] + $elves[2];
