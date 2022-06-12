<?php

namespace catInBeard\charTranslit;

const ENRUSYM = array(
    'q' => 'й',    'w' => 'ц',    'e' => 'у',    'r' => 'к',    't' => 'е',
    'y' => 'н',    'u' => 'г',    'i' => 'ш',    'o' => 'щ',    'p' => 'з',
    'a' => 'ф',    's' => 'ы',    'd' => 'в',    'f' => 'а',    'g' => 'п',
    'h' => 'р',    'j' => 'о',    'k' => 'л',    'l' => 'д',    'z' => 'я',
    'x' => 'ч',    'c' => 'с',    'v' => 'м',    'b' => 'и',    'n' => 'т',
    'm' => 'ь',    'F' => 'А',    'D' => 'В',    'U' => 'Г',    'L' => 'Д',
    'T' => 'Е',    'P' => 'З',    'B' => 'И',    'Q' => 'Й',    'R' => 'К',
    'K' => 'Л',    'V' => 'М',    'Y' => 'Н',    'J' => 'О',    'G' => 'П',
    'H' => 'Р',    'C' => 'С',    'N' => 'Т',    'E' => 'У',    'A' => 'Ф',
    'W' => 'Ц',    'X' => 'Ч',    'I' => 'Ш',    'O' => 'Щ',    'M' => 'Ь',
    'S' => 'Ы',    'Z' => 'Я'
);

function enToRuSym(string $input): string
{
    return strtr($input, ENRUSYM);
}
