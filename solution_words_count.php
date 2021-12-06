<?php

declare(strict_types=1);

function wordsCount(string $sourceString): array
{
    $arr = [];
    $sourceString = str_replace("\r\n", " ", $sourceString);
    $sourceString = str_replace(["-", ",", ".", ";", ":", "“", "’"], "", $sourceString);
    $f = explode(" ", mb_strtolower($sourceString));
    sort($f);
    if ($f[0] == "") {unset($f[0]);}
    foreach ($f as &$value) {
        $arr[$value] = $arr[$value] + 1;
    }
    return $arr;
}

var_dump(wordsCount("Первый, второй. Первый-второй. Третий1"));