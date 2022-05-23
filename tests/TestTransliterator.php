<?php
include_once('../vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class TestTransliterator extends TestCase
{
    public function testDefaults()
    {
        $this->assertEquals(\catInBeard\chartranslit\ruToEn("Тест"),\catInBeard\charTranslit\Transliteration("Тест"));
        $this->assertEquals(\catInBeard\chartranslit\enToRu("Тест"),\catInBeard\charTranslit\Transliteration("Test","Ru"));
        $this->assertEquals(\catInBeard\chartranslit\enToRu("Test"),\catInBeard\charTranslit\Transliteration("Test","Ru","En"));
        $this->assertEquals("Test",\catInBeard\charTranslit\Transliteration("Test","EN"));
        $this->assertEquals(\catInBeard\chartranslit\enToRuSym("Test"),\catInBeard\charTranslit\Transliteration("Test","Ru","En",TRUE));
    }
    public function testCaseInsense(){
        $this->assertEquals(\catInBeard\charTranslit\Transliteration("Test","Ru"),\catInBeard\charTranslit\Transliteration("Test","RU"));
        $this->assertEquals(\catInBeard\charTranslit\Transliteration("Test","ru"),\catInBeard\charTranslit\Transliteration("Test","RU"));
        $this->assertEquals(\catInBeard\charTranslit\Transliteration("Test","Ru"),\catInBeard\charTranslit\Transliteration("Test","Ru"));
    }
    public function testUnrealFromLanguageWarning()
    {
        $this->expectWarning();
        $this->expectWarningMessageMatches('/Unknown language/');
        \catInBeard\charTranslit\Transliteration("Тест","NotALanguage");
    }
    public function testUnrealToLanguageWarning()
    {
        $this->expectWarning();
        $this->expectWarningMessageMatches('/Unknown language/');
        \catInBeard\charTranslit\Transliteration("Тест","en","UnrealLang");
    }
    public function testRu(){
        $this->assertEquals(\catInBeard\charTranslit\enToRu("Тест"),\catInBeard\charTranslit\Transliteration("Тест","RU"));
        $this->assertEquals(\catInBeard\charTranslit\ruToEn("Test"),\catInBeard\charTranslit\Transliteration("Test","EN","RU"));
        $this->assertEquals(\catInBeard\charTranslit\enToRuSym("Тест"),\catInBeard\charTranslit\Transliteration("Тест","RU","EN",TRUE));
        $this->assertEquals(\catInBeard\charTranslit\ruToEnSym("Test"),\catInBeard\charTranslit\Transliteration("Test","EN","RU",TRUE));
    } 
}