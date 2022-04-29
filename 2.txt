<?php

class ClassCounter
{
    private static int $shetchik = 0;
    private static int $vizov = 0;

    public function __construct()
    {self::$shetchik++;}

    public function __destruct()
    {self::$shetchik--;}

    public function __call(string $name, array $arguments)
    {
        if ($name === 'callMethod') {
            self::$vizov++;
        }
    }

    public static function getObjectsNum(): int
    {return self::$shetchik;}

    public static function getMethodCallNum(): int
    {return self::$vizov;}
}
