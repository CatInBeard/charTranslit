<?php

namespace catInBeard\charTranslit;

const ENDESYM = array(
    '"'=>'Ä','\''=>'ä','{'=>'Ü','['=>'ü',':'=>'Ö',';'=>'ö','_'=>"ß",'-'=>'ẞ',"Y"=>"Z","y"=>"z"
);

function enToDeSym(string $input):string
{
    return strtr($input, ENDESYM);
}