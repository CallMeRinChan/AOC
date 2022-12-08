<?php

ini_set("display_errors", 1);

$file = file_get_contents("inputs/input_day6.txt");
$inputs = explode("\n", $file);

$marker = 4;
$stop = true;
//substr($file, $i, 4)
for($i=0;$i<strlen(trim($file));$i++) {
    if (isset($file[$i + 4])) {
        if (substr($file, $i, 4) != implode(array_unique(str_split(substr($file, $i, 4))))) {
            if($stop) {
                $marker++;
            }
        }else{
            $stop = false;
        }
    }
}

echo $marker;

