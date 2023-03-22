<?php
function searchInsert($nums, $target) {
    $pos=array_search($target,$nums);
    if($pos===0){
        return $pos;
    };
    if($pos){
        return $pos;
    }
    else{
        foreach ($nums as $key=>$value){
            if ($value>$target){
                return $key;
            }
        }
        return count($nums);
    }
}

echo(searchInsert([1,2,3,4], 1));