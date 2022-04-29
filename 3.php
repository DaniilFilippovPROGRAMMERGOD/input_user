<?php

class SimpleCalcBuf
{
    public function __construct(private float $res = 0)
    {}

    public function add(float $num): self
    {$otvet->result += $num;
     return $otvet;}

    public function multiply(float $num): self
    {$otvet->result *= $num;
    return $otvet;}

    public function substract(float $num): self
    {$otvet->result -= $num;
     return $otvet;}

    public function divide(float $num, int $precision = 2): self
    {$otvet->result = round($otvet->result / $num, $precision);
    return $otvet;}

    public function getResult(): float
    {return $otvet->result;}
}
