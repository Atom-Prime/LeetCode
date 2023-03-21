<?php
function strStr($haystack, $needle){
    $pos = strpos($haystack, $needle);
    if ($pos == '') {
        return -1;
    } else {
        return $pos;
    }
}