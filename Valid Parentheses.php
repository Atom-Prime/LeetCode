<?php
function isValid($s) {
    $len=strlen($s);
    $last_open_parenthesis='';
    $count_scobka = 0;
    $count_figere_scobka = 0;
    $count_squire_scobka = 0;
    for($i=0;$i<$len; $i++){
        if($s[$i]=='(') {
            $count_scobka++;
            $last_open_parenthesis=$s[$i].$last_open_parenthesis;
        };
        if($s[$i]==')'){
            if($last_open_parenthesis[0]!='('){
                return False;
            };
            $count_scobka--;
            $last_open_parenthesis=substr($last_open_parenthesis,1);
        };

        if($s[$i]=='{'){
            $count_figere_scobka++;
            $last_open_parenthesis=$s[$i].$last_open_parenthesis;
        };
        if($s[$i]=='}'){
            if($last_open_parenthesis[0]!='{'){
                return False;
            };
            $count_figere_scobka--;
            $last_open_parenthesis=substr($last_open_parenthesis,1);
        };

        if($s[$i]=='['){
            $count_squire_scobka++;
            $last_open_parenthesis=$s[$i].$last_open_parenthesis;
        };
        if($s[$i]==']'){
            if($last_open_parenthesis[0]!='['){
                return False;
            };
            $count_squire_scobka--;
            $last_open_parenthesis=substr($last_open_parenthesis,1);
        };

        if($count_squire_scobka<0 or $count_figere_scobka<0 or $count_scobka<0){return False;};
    }
    if($count_squire_scobka==0 and $count_figere_scobka==0 and $count_scobka==0){return True;};
    return False;
}

