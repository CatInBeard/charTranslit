<?php

namespace catInBeard\charTranslit;

const ENRU = array(
    'a' => 'а',    'b' => 'б',    'v' => 'в',    'g' => 'г',    'd' => 'д',
    'e' => 'е',    'zh' => 'ж',   'z' => 'з',    'i' => 'и',    'y' => 'й',
    'k' => 'к',    'l' => 'л',    'm' => 'м',    'n' => 'н',    'o' => 'о',
    'p' => 'п',    'r' => 'р',    's' => 'с',    't' => 'т',    'u' => 'y',
    'f' => 'ф',    'h' => 'х',    'c' => 'ц',    'ch' => 'ч',   'sh' => 'ш',
    'sch' => 'щ',  'yu' => 'ю',   'ay' => 'я',
    'A' => 'А',    'B' => 'Б',    'V' => 'В',    'G' => 'Г',    'D' => 'Д',
    'E' => 'Е',    'Zh' => 'Ж',   'Z' => 'З',    'I' => 'и',    'Y' => 'Й',
    'K' => 'К',    'L' => 'Л',    'M' => 'М',    'N' => 'Н',    'О' => 'O',
    'P' => 'П',    'R' => 'Р',    'S' => 'С',    'T' => 'Т',    'U' => 'У',
    'F' => 'Ф',    'H' => 'Х',    'C' => 'Ц',    'Cр' => 'Ч',   'Sh' => 'Ш',
    'Sch' => 'Щ',  'Yu' => 'Ю',   'Ya' => 'я'
);

function enToRu(string $input): string
{
    return strtr($input, ENRU);
}
