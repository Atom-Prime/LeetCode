<?php
function romanToInt($s) {
    $s=strrev($s);
    $as=0;
    $ogr=strlen($s);
    for($i=0; $i<$ogr;$i++){
        if($s[$i]=='I'){
            $as++;
        }
        if($s[$i]=='V'){
            if($i+1<$ogr && $s[$i+1]=='I'){
                $as=$as+4;
                $i++;
            }
            else{$as=$as+5;}
        }
        if($s[$i]=='X'){
            if($i+1<$ogr && $s[$i+1]=='I'){
                $as=$as+9;
                $i++;
            }
            else{$as=$as+10;}
        }
        if($s[$i]=='L'){
            if($i+1<$ogr && $s[$i+1]=='X'){
                $as=$as+40;
                $i++;
            }
            else{$as=$as+50;}

        }
        if($s[$i]=='C'){
            if($i+1<$ogr && $s[$i+1]=='X'){
                $as=$as+90;
                $i++;
            }
            else{$as=$as+100;}

        }
        if($s[$i]=='D'){
            if($i+1<$ogr && $s[$i+1]=='C'){
                $as=$as+400;
                $i++;
            }
            else{$as=$as+500;}

        }
        if($s[$i]=='M'){
            if($i+1<$ogr && $s[$i+1]=='C'){
                $as=$as+900;
                $i++;
            }
            else{$as=$as+1000;}

        }
    }
    return $as;
}


echo(romanToInt("MCMXCIV"));