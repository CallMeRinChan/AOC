<?php

ini_set("display_errors", 1);

$file = file_get_contents("inputs/input_day1.txt");
//print_r($file);
$inputs = explode("\n", $file);

$highestElf = 0;
$currentElf = 0;

foreach($inputs as $input)
{
    if (!empty($input))
    {
        $currentElf += intval($input);
    }else{
        if($currentElf > $highestElf) {
            $highestElf = $currentElf;
        }
        $currentElf = 0;
    }
}

echo $highestElf;