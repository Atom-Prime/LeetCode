<?php
function lengthOfLastWord($s){
    $s=strrev($s);
    $mass_words=explode(' ', $s);
    foreach($mass_words as $value){
        if($value!=''){
            return strlen($value);
        };
    }
};