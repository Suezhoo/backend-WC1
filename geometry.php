<?php 
    $functionsExecutedCounter;

    function calcSurfaceTriangle($base, $height){
        global $functionsExecutedCounter;
        $functionsExecutedCounter++;
        return ($base * $height) / 2;
    }

    function calcSurfaceSquare($side){
        global $functionsExecutedCounter;
        $functionsExecutedCounter++;
        return $side * $side;
    }

    function calcSurfaceRect($base, $height){
        global $functionsExecutedCounter;
        $functionsExecutedCounter++;
        return $base * $height;
    }
?>