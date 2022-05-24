<?php

namespace catInBeard\charTranslit;

const DEENSYM = array(
    'Ä'=>'"','ä'=>'\'','Ü'=>'{','ü'=>'[','Ö'=>':','ö'=>';',"ß"=>'_','ẞ'=>'-',"Z"=>"Y","z"=>"y"
);

function deToEnSym(string $input):string
{
    return strtr($input, DEENSYM);
}