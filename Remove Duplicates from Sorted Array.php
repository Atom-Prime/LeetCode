<?php
function removeDuplicates(&$mas) {
    foreach ($mas as $key=>$value){
        if($key != array_search($value, $mas)){
            unset($mas[$key]);
        }
    }
    return count($mas);
};




$mas=[1,1,2];
$count=removeDuplicates($mas);
foreach ($mas as $key){
    echo($key.' ');
};