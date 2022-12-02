<?php

ini_set("display_errors", 1);

// A = rock, B = paper, C is scissors
// X = rock, Y = paper, Z is scissors

// win gives you 6
// draw gives you 3
// loss gives you 0

// rock gives you 1
// paper gives you 2
// scissors gives you 3

// PART 2:
// A = draw
// B = lose
// C = win

$file = file_get_contents("inputs/input_day2.txt");
$inputs = explode("\n", $file);

$totalPoints = 0;

foreach($inputs as $char)
{
    $opponent = substr($char, 0, 1);
    $player = doStrategy(substr($char, -1, 1),$opponent);

    $totalPoints += doThrowPoints($player);
    $totalPoints += doTurns($opponent,$player);


}
seeResults($totalPoints);

function doStrategy($player, $opponent) : string{
    $play = 0;
    if($player == "X"){
        if($opponent == "A"){
            $play = "Z";
        }
        if($opponent == "B"){
            $play = "X";
        }
        if($opponent == "C"){
            $play = "Y";
        }
    }
    if($player == "Y"){
        if($opponent == "A"){
            $play = "X";
        }
        if($opponent == "B"){
            $play = "Y";
        }
        if($opponent == "C"){
            $play = "Z";
        }
    }
    if($player == "Z"){
        if($opponent == "A"){
            $play = "Y";
        }
        if($opponent == "B"){
            $play = "Z";
        }
        if($opponent == "C"){
            $play = "X";
        }
    }
    return $play;
}

function doThrowPoints($throw) : int{
    $points = 0;
    switch($throw){
        case "X":
            $points = 1;
            break;
        case "Y":
            $points = 2;
            break;
        case "Z":
            $points = 3;
            break;
    }
    return $points;
}

function doTurns($opponent, $player) : int{
    $points = 0;
    if($opponent == "A"){
        if($player == "X"){
            $points = 3;
        }
        if($player == "Y"){
            $points = 6;
        }
        if($player == "Z"){
            $points = 0;
        }
    }
    if($opponent == "B"){
        if($player == "X"){
            $points = 0;
        }
        if($player == "Y"){
            $points = 3;
        }
        if($player == "Z"){
            $points = 6;
        }
    }
    if($opponent == "C"){
        if($player == "X"){
            $points = 6;
        }
        if($player == "Y"){
            $points = 0;
        }
        if($player == "Z"){
            $points = 3;
        }
    }
    return $points;
}

function seeResults($value) : void{
    echo $value;
}
