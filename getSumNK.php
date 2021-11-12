<?php
declare(strict_types=1);

function getSumNK(array $input, int $N,int $K)
{
    
    
    
   
    $SUM = 0;
    $num = count($input);
    
    if($N < 0 or $K <0){
        return -1;}
    
    if($num<1){
        return 0;}
    
    if($num < ($N+$K-1)){
        return -1;}
    
    foreach($input as $boba){
        if(is_int($boba)!==true){
            return -1;
        }
    }
    
    
    if($N===0){
        foreach($input as $boba){
             $SUM = $SUM + $boba;
        }return $SUM;
    }

       if($K===0){
        foreach($input as $boba){
            while($N!=0){
                $SUM = $SUM + $input[$K];
            $K = $K + 1;
            $N=$N-1;
            }
        }
}
if($K>0){
    $K = $K - 1;
    foreach($input as $boba){
        while($N!=0){
            $SUM = $SUM + $input[$K];
            $K = $K + 1;
            $N=$N-1;
        }

    }
}
return $SUM;
  
}

?>