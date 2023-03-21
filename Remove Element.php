<?php
function removeElement(&$nums, $val) {
    $k=0;
    foreach($nums as $key=>$value){
        if($value == $val){
            unset($nums[$key]);
        }
        else{
            $k++;
        };
    };
    return $k;
}