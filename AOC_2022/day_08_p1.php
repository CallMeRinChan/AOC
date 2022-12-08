<?php

ini_set("display_errors", 1);

$file = file_get_contents("inputs/day_8test.txt");
$inputs = explode("\n", trim($file));

$visibleTrees = 0;
$visible = true;

for($y=0; $y < count($inputs); $y++){
    for($x = 0; $x <= strlen($inputs[$y])-1; $x++){
        if($y == 0 || $x == 0 || $y == count($inputs)-1 || $x == strlen($inputs[$y+1])){ // if the tree's at the edge
            $visibleTrees += 1;
        }
        for($i = 0; $i < count($inputs); $i++) {
            if (isset($inputs[$y + $i][$x])) {
                echo $inputs[$y + $i][$x] . "<br/>";
                if ($inputs[$y + $i][$x] >= $inputs[$y][$x]) {
                    $visible = false;
                    break 3;
                }
            }
        }
        if($visible){
            $visibleTrees++;
        }else {
            $visible = true;
        }
    }
}

//echo $visibleTrees;