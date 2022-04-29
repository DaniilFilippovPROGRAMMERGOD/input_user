<?php

class SimpleCalc
{
    public static function add(float $one, float $two): float
    {return $one + $two;}

    public static function multiply(float $one, float $two): float
    {return $one * $two;}

    public static function substract(float $one, float $two): float
    {return $one - $two;}

    public static function divide(float $one, float $two): float
    {return round($one / $two, 2);}
}
