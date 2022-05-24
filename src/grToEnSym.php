<?php

namespace catInBeard\charTranslit;


const GRENSYM = array(
    ":"=>"Q",";"=>"q","Σ"=>"W","ς"=>"w","Ε"=>"E","ε"=>"e","Ρ"=>"R","ρ"=>"r",
    "Τ"=>"T","τ"=>"t","Υ"=>"Y","υ"=>"y","Θ"=>"U","θ"=>"u","Ι"=>"I","ι"=>"i",
    "Ο"=>"O","ο"=>"o","Π"=>"P","π"=>"p","Α"=>"A","α"=>"a","Σ"=>"S","σ"=>"s",
    "Δ"=>"D","δ"=>"d","Φ"=>"F","φ"=>"f","Γ"=>"G","γ"=>"g","Η"=>"H","η"=>"h",
    "Ξ"=>"J","ξ"=>"j","Κ"=>"K","κ"=>"k","Λ"=>"L","λ"=>"l","Ζ"=>"Z","ζ"=>"z",
    "Χ"=>"X","χ"=>"x","Ψ"=>"C","ψ"=>"c","Ω"=>"V","ω"=>"v","Β"=>"B","β"=>"b",
    "Ν"=>"N","ν"=>"n","Μ"=>"M","μ"=>"m"
);

function grToEnSym(string $input):string
{
    return strtr($input, GRENSYM);
}