<?php

use PHPUnit\Framework\TestCase;

class TestRu extends TestCase
{
    public function testEnToRu()
    {
        $this->assertEquals("Тест", \catInBeard\charTranslit\enToRu("Test"));
        $this->assertEquals("Тест2", \catInBeard\charTranslit\enToRu("Test2"));
        $this->assertEquals("тест", \catInBeard\chartranslit\enToRu("test"));
    }
    public function testRuToEn()
    {
        $this->assertEquals("Test", \catInBeard\chartranslit\ruToEn("Тест"));
        $this->assertEquals("Test2", \catInBeard\chartranslit\ruToEn("Тест2"));
        $this->assertEquals("test", \catInBeard\chartranslit\ruToEn("тест"));
    }
    public function testEnToRuSym()
    {
        $this->assertEquals("Еуые", \catInBeard\charTranslit\enToRuSym("Test"));
        $this->assertEquals("Еуые2", \catInBeard\charTranslit\enToRuSym("Test2"));
        $this->assertEquals("еуые", \catInBeard\chartranslit\enToRuSym("test"));
    }
    public function testRuToEnSym()
    {
        $this->assertEquals("Ntcn", \catInBeard\chartranslit\ruToEnSym("Тест"));
        $this->assertEquals("Ntcn2", \catInBeard\chartranslit\ruToEnSym("Тест2"));
        $this->assertEquals("ntcn", \catInBeard\chartranslit\ruToEnSym("тест"));
    }
}
