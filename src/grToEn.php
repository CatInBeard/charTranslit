<?php

namespace catInBeard\charTranslit;

//https://unicode-table.com/en/alphabets/greek/
const GREN = array(
    "Α"=>"A","α"=>"a","Β"=>"V","β"=>"v","Γ"=>"G","γ"=>"g","Δ"=>"D","δ"=>"d","Ε"=>"E","ε"=>"e",
    "Ζ"=>"Z","ζ"=>"z","Η"=>"H","η"=>"h","Θ"=>"Th","θ"=>"th","Ι"=>"I","ι"=>"i","Κ"=>"K","κ"=>"k",
    "Λ"=>"L","λ"=>"l","Μ"=>"M","μ"=>"m","Ν"=>"N","ν"=>"n","Ξ"=>"Ks","ξ"=>"ks","Ο"=>"O","ο"=>"o",
    "Π"=>"P","π"=>"p","Ρ"=>"R","ρ"=>"r","Σ"=>"S","σ"=>"s","ς"=>"s","Τ"=>"T","τ"=>"t","Υ"=>"Y","υ"=>"y",
    "Φ"=>"F","φ"=>"f","Χ"=>"Ch","χ"=>"ch","Ψ"=>"Ps","ψ"=>"ps","Ω"=>"W","ω"=>"w"
);

function grToEn(string $input):string
{
    return strtr($input, GREN);
}