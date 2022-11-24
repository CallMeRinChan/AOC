<?php

$file = file_get_contents("day_03_input.txt");
$binaries = explode("\n", $file);

$gamma = "";
$epsilon = "";
$ones = 0;


for($i = 0; $i < strlen($binaries[0]); $i++){ // for every char
    for ($j= 0; $j < count($binaries); $j++){ // for every line
        if (substr($binaries[$j],$i, 1) == "1"){ // $binaries[binarycode],char || if char($i) is "1"
            $ones++;
        }
    }
    if($ones > count($binaries)/2){ // if more than half of the chars have a 1
        $gamma .= "1";
    }else{
        $gamma .= "0";
    }
    $ones = 0;
}

// invert gamma to epsilon
foreach(str_split($gamma) as $char){
    if($char == "1"){
        $epsilon .= "0";
    }else{
        $epsilon .= "1";
    }
}

echo "gamma: {$gamma} \n";
echo "epsilon: {$epsilon} \n";

echo bindec($gamma) * bindec($epsilon);

