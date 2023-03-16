<?php

    function twoSum($nums, $target) {
        foreach ($nums as $key => $value)
        {
                unset($nums[$key]);
                $value2 = array_search($target-$value, $nums);

                if (gettype($value2)!='boolean')
                {
                    $n1=$key;
                    $n2=$value2;
                    break;
                }
        }
        return [$n1,$n2];
    }

    $answer= twoSum([-3,4,3,90],0);
    foreach ($answer as $value){
        echo $value;
    }