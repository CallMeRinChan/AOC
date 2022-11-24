<?php

$file = file_get_contents("day_03_input.txt");
$binaries = explode("\n", $file);

$oxygen = [];
$carbon = [];

$ones = 0;


for($i = 0; $i < strlen($binaries[0]); $i++){ // for every char
    for ($j= 0; $j < count($binaries); $j++){ // for every line
        if (substr($binaries[$j],$i, 1) == "1"){ // $binaries[binarycode],char || if char($i) is "1"
            $ones++;
        }
    }
    array_push($oxygen, checkOxygen($ones, $binaries));
    array_push($carbon, checkCarbon($ones, $binaries));

    $ones = 0;
}

function checkOxygen($ones, $binaries){
   if($ones >= count($binaries)/2){
       if()
        return 1;
    }else{
        return 0;
    }
}

function checkCarbon($ones, $binaries){
    if($ones <= count($binaries)/2){
        return 0;
    }else{
        return 1;
    }
}


