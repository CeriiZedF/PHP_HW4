<?php
function swap_variable(&$a, &$b)
{
    $temp = $b;
    $b = $a;
    $a = $temp;
}
function random_array_value($count_elem, $min_val, $max_val){
    if($max_val > $min_val){
        $temp = $max_val;
        $max_val = $min_val;
        $min_val = $temp;

    }
    $array = [];

    for($i = 0; $i < $count_elem; $i++){
        array_push($array, rand($min_val, $max_val));
    }

    return $array;
}

