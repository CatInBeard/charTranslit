<?php
namespace catinbeard\chartranslit;

function Transliteration(string $string,string $to="en",string $from="all",bool $type=false):string
{
    $to   = mb_strtolower($to);
    $from = mb_strtolower($from);
    if($to==$from){
        return $string;
    }
    if($type){
        switch($from){
            case "ru":
                $string=\catinbeard\chartranslit\ruToEnSym($string);
            break;
            case "all":
                $string=\catinbeard\chartranslit\ruToEnSym($string);
            break;
            case "en":
            break;
            default:
                trigger_error("Unknown language ".$from, E_USER_WARNING);
                return $string;
        }
        switch($to){
            case "ru":
                $string=\catinbeard\chartranslit\enToRuSym($string);
            break;
            case "en":
            break;
            default:
                trigger_error("Unknown language ".$to, E_USER_WARNING);
                return $string;
        }
    }
    else{
        switch($from){
            case "ru":
                $string=\catinbeard\chartranslit\ruToEn($string);
            break;
            case "all":
                $string=\catinbeard\chartranslit\ruToEn($string);
            break;
            case "en":
            break;
            default:
                trigger_error("Unknown language ".$from, E_USER_WARNING);
                return $string;
        }
        switch($to){
            case "ru":
                $string=\catinbeard\chartranslit\enToRu($string);
            break;
            case "en":
            break;
            default:
                trigger_error("Unknown language ".$to, E_USER_WARNING);
                return $string;
        }
    }
    

    return $string;
}