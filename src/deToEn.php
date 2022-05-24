<?php

namespace catInBeard\charTranslit;

//https://unicode-table.com/en/alphabets/german/

const DEEN = array(
    'Ä'=>'Ea','ä'=>'ea','Ü'=>'Y','ü'=>'y','Ö'=>'Oo','ö'=>'oo',"ß"=>'Eszett','ẞ'=>'eszett'
);

function deToEn(string $input):string
{
    return strtr($input, DEEN);
}