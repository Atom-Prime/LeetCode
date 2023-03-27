<?php
function plusOne($digits){
    for($i=count($digits)-1;$i>=0;$i--){
        if ($digits[$i]==9){
            if($i==0){
                $digits[$i]=0;
                $digits=array_merge([1],$digits);
                return $digits;
            }
            $digits[$i]=0;
            continue;
        }
        else{
            $digits[$i]++;
            return $digits;
        }
    }
}


plusOne([1,2,3]);
