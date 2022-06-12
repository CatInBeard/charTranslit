<?php

namespace catinbeard\chartranslit;

function Transliteration(string $string, string $to = "en", string $from = "all", bool $type = false): string
{
    $to   = mb_strtolower($to);
    $from = mb_strtolower($from);
    if ($to == $from) {
        return $string;
    }
    if ($type) {
        switch ($from) {
            case "ru":
                $string = \catinbeard\chartranslit\ruToEnSym($string);
                break;
            case "de":
                $string = \catinbeard\chartranslit\deToEnSym($string);
                break;
            case "gr":
                $string = \catinbeard\chartranslit\grToEnSym($string);
                break;
            case "all":
                if ($to != "ru") {
                    $string = \catinbeard\chartranslit\ruToEnSym($string);
                }
                if ($to != "gr") {
                    $string = \catinbeard\chartranslit\grToEnSym($string);
                }
                if ($to == "ru" or $to == "gr") {
                    $string = \catinbeard\chartranslit\deToEnSym($string);
                }
                break;
            case "en":
                break;
            default:
                trigger_error("Unknown language " . $from, E_USER_WARNING);
                return $string;
        }
        switch ($to) {
            case "ru":
                $string = \catinbeard\chartranslit\enToRuSym($string);
                break;
            case "de":
                $string = \catinbeard\chartranslit\enToDeSym($string);
                break;
            case "gr":
                $string = \catinbeard\chartranslit\enToGrSym($string);
                break;
            case "en":
                break;
            default:
                trigger_error("Unknown language " . $to, E_USER_WARNING);
                return $string;
        }
    } else {
        switch ($from) {
            case "ru":
                $string = \catinbeard\chartranslit\ruToEn($string);
                break;
            case "de":
                $string = \catinbeard\chartranslit\deToEn($string);
                break;
            case "gr":
                $string = \catinbeard\chartranslit\grToEn($string);
                break;
            case "all":
                if ($to != "ru") {
                    $string = \catinbeard\chartranslit\ruToEn($string);
                }
                if ($to != "de") {
                    $string = \catinbeard\chartranslit\deToEn($string);
                }
                if ($to != "gr") {
                    $string = \catinbeard\chartranslit\grToEn($string);
                }
                break;
            case "en":
                break;
            default:
                trigger_error("Unknown language " . $from, E_USER_WARNING);
                return $string;
        }
        switch ($to) {
            case "ru":
                $string = \catinbeard\chartranslit\enToRu($string);
                break;
            case "de":
                $string = \catinbeard\chartranslit\enToDe($string);
                break;
            case "gr":
                $string = \catinbeard\chartranslit\enToGr($string);
                break;
            case "en":
                break;
            default:
                trigger_error("Unknown language " . $to, E_USER_WARNING);
                return $string;
        }
    }


    return $string;
}
