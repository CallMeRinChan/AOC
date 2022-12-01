<?php

function debug($iets){
    echo "<pre>";
    print_r($iets);
}


ini_set("display_errors", 1);

$file = file_get_contents("inputs/input_day1.txt");
$inputs = explode("\n", $file);

//var_dump($inputs);

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
//print_r($elves);
//$elves = asort($elves);
rsort($elves);
//print_r($elves);
echo $elves[0] + $elves[1] + $elves[2];

/*      -- 3 elven met het meese krijgen
 *
 *  krijg elke input
 *  tel de input bij de currentElf op
 *  als huidige input empty is:
 *  doe currentElf in de elves array
 *  reset currentElf
 *  ga een Elf omhoog
 *
 *  sorteer de array
 *  tel de bovenste 3 op
 */