<?php

// Min - Max
// Expected output: 1 2 3 6

// Push 1 [1] min: 1 max: 1 1*1 = 1
// Push 2 [1,2] min: 1 max: 2 1*2 = 2
// Push 3 [1,2,3] min: 1 max: 3 1*3 = 3
// Pop  1 [2,3] min: 2 max: 3 2*3 = 6

$operations = ['push', 'push', 'push', 'pop'];
$x = [1,2,3,1];

function minMax($operations, $x){  
    foreach($operations as $key => $value) {
        if ($value == 'push') {
            $ordered[] = $x[$key];
            arsort($ordered);
            $minMax[] = min($ordered) * max($ordered);
        } 
        if ($value == 'pop') {
            $clave = array_search($x[$key], $ordered);
            unset($ordered[$clave]);
            $minMax[] = min($ordered) * max($ordered);
        }
    }
    
    return $minMax;
}

$minMax = minMax($operations, $x);
print_r($minMax);
