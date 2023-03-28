<?php
function addBinary($a, $b) {
    $a=strrev($a);
    $b=strrev($b);
    $min_limit_cycle=strlen($a);
    $max_limit_cycle=strlen($b);
    $very_necessary_line=$b;
    if($min_limit_cycle>strlen($b)){
        $min_limit_cycle=strlen($b);
        $max_limit_cycle=strlen($a);
        $very_necessary_line=$a;
    };
    $counter=0;
    $answer='';
    for($i=0;$i<$min_limit_cycle;$i++){
        echo'qwe1';
        $counter=$counter+$a[$i];
        $counter=$counter+$b[$i];
        $answer= $counter%2 . $answer;
        $counter=intdiv($counter,2);
    }
    for($i=$min_limit_cycle;$i<$max_limit_cycle;$i++) {
        $counter = $counter + $very_necessary_line[$i];
        $answer = $counter % 2 . $answer;
        $counter = intdiv($counter, 2);
    }
    if($counter==1){
    return $counter%2 . $answer;
    }
}

addBinary('100','110010');