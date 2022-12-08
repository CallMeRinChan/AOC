<?php

ini_set("display_errors", 1);

$file = file_get_contents("inputs/input_day6.txt");
$inputs = explode("\n", $file);

$marker = 14;
$stop = true;

for($i=0;$i<strlen(trim($file));$i++) {
    if (isset($file[$i + 14])) {
        if (substr($file, $i, 14) != implode(array_unique(str_split(substr($file, $i, 14))))) {
            if($stop) {
                $marker++;
            }
        }else{
            $stop = false;
        }
    }
}

echo $marker;

