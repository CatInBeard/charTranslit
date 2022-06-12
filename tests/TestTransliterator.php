<?php

use PHPUnit\Framework\TestCase;

class TestTransliterator extends TestCase
{
    public function testDefaults()
    {
        $this->assertEquals(\catInBeard\chartranslit\ruToEn("Тест"), \catInBeard\charTranslit\Transliteration("Тест"));
        $this->assertEquals("Test Ea", \catInBeard\charTranslit\Transliteration("Тест Ä"));
        $this->assertEquals(\catInBeard\chartranslit\enToRu("Тест"), \catInBeard\charTranslit\Transliteration("Test","Ru"));
        $this->assertEquals(\catInBeard\chartranslit\enToRu("Тест Еа"), \catInBeard\charTranslit\Transliteration("Test Ä","Ru"));
        $this->assertEquals(\catInBeard\chartranslit\enToRu("Test"), \catInBeard\charTranslit\Transliteration("Test","Ru","En"));
        $this->assertEquals("Test", \catInBeard\charTranslit\Transliteration("Test","EN"));
        $this->assertEquals(\catInBeard\chartranslit\enToRuSym("Test"), \catInBeard\charTranslit\Transliteration("Test","Ru","En",true));
    }
    public function testCaseInsense()
    {
        $this->assertEquals(\catInBeard\charTranslit\Transliteration("Test","Ru"), \catInBeard\charTranslit\Transliteration("Test","RU"));
        $this->assertEquals(\catInBeard\charTranslit\Transliteration("Test","ru"), \catInBeard\charTranslit\Transliteration("Test","RU"));
        $this->assertEquals(\catInBeard\charTranslit\Transliteration("Test","Ru"), \catInBeard\charTranslit\Transliteration("Test","Ru"));
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
    public function testOneLanguage()
    {
        $this->assertEquals("Test", \catInBeard\charTranslit\Transliteration("Test","EN","En"));
    }
    public function testMultilanguage()
    {
        $this->assertEquals("Test", \catInBeard\charTranslit\Transliteration("Тест","De"));
    }
    public function testRu()
    {
        $this->assertEquals(\catInBeard\charTranslit\enToRu("Тест"), \catInBeard\charTranslit\Transliteration("Тест","RU"));
        $this->assertEquals(\catInBeard\charTranslit\ruToEn("Test"), \catInBeard\charTranslit\Transliteration("Test","EN","RU"));
        $this->assertEquals(\catInBeard\charTranslit\enToRuSym("Тест"), \catInBeard\charTranslit\Transliteration("Тест","RU","EN",true));
        $this->assertEquals(\catInBeard\charTranslit\ruToEnSym("Test"), \catInBeard\charTranslit\Transliteration("Test","EN","RU",true));
    }
    public function testDe()
    {
        $this->assertEquals(\catInBeard\charTranslit\enToDe("Test"), \catInBeard\charTranslit\Transliteration("Test","DE"));
        $this->assertEquals(\catInBeard\charTranslit\DeToEn("TestÄ"), \catInBeard\charTranslit\Transliteration("TestÄ","EN","DE"));
        $this->assertEquals(\catInBeard\charTranslit\enToDeSym("qwerty"), \catInBeard\charTranslit\Transliteration("qwerty","DE","EN",true));
        $this->assertEquals(\catInBeard\charTranslit\DeToEnSym("qwertz"), \catInBeard\charTranslit\Transliteration("qwertz","EN","DE",true));
    }
    public function testGr()
    {
        $this->assertEquals(\catInBeard\charTranslit\enToGr("Test"), \catInBeard\charTranslit\Transliteration("Test","GR"));
        $this->assertEquals(\catInBeard\charTranslit\GrToEn("ΤεστΨ"), \catInBeard\charTranslit\Transliteration("ΤεστΨ","EN","GR"));
        $this->assertEquals(\catInBeard\charTranslit\enToGrSym("qwerty"), \catInBeard\charTranslit\Transliteration("qwerty","Gr","EN",true));
        $this->assertEquals(\catInBeard\charTranslit\GrToEnSym("ΤεστΨ"), \catInBeard\charTranslit\Transliteration("ΤεστΨ","EN","GR",true));
    }
}
