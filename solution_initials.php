<?php

declare(strict_types=1);

function getInitials(string $FIO)
{
    if (strlen($FIO)<1){
        return null;
        exit;
    }
    $str = mb_convert_case($FIO, MB_CASE_TITLE, "UTF-8");
    $Massiv = explode(" ", $str);
    
    if(count($Massiv)<2){
        return null;
        exit;
    }
    
    $initial = "";
    $initial = $initial.$Massiv[0]." ";
    $Massiv2 = array_shift($Massiv);
    
    foreach($Massiv as &$value){
        $eng='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        $initial = $initial.mb_substr($value,0,1).'.';
        $pos = strpos(mb_substr($value,0,strlen($value)),'-');
        if (strpos($eng,mb_substr($value,1,2)) === false) {
            $pos = $pos/2;
        }
        if (strpos($value, '-') !== false) {
            $initial = $initial.mb_substr($value,$pos,2).'.';
        }
    }  
    return $initial;
}

?>