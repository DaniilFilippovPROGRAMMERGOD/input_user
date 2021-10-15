<?php
declare(strict_types=1);

function getBMI(int $height,float $weight)
{
    if( ($height >=300)or( $height <=10) ){
        return null;
        exit;
    }
    
    if( ($weight >=300.0)or( $weight <=1.0) ){
        return null;
        exit;
    }
    
    $height =  $height/100;
    $bmi = $weight/($height**2);
    return "BMI: ".round($bmi,2);
}



?>