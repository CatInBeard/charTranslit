<?php
namespace catinbeard\chartranslit;

function Transliteration(string $input,string $to="en",string $from="all",bool $type=false):string
{
    $to   = mb_strtolower($to);
    $from = mb_strtolower($from);

    if($from=="all"){

    }

    return $output;
}