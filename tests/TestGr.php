<?php

use PHPUnit\Framework\TestCase;

class TestGr extends TestCase
{
    public function testGrToEn()
    {
        $this->assertEquals("Test", \catInBeard\charTranslit\grToEn("Τεστ"));
        $this->assertEquals("Test2", \catInBeard\charTranslit\grToEn("Τεστ2"));
        $this->assertEquals("test", \catInBeard\chartranslit\grToEn("τεστ"));
    }
    public function testEnToGr()
    {
        $this->assertEquals("Τεστ", \catInBeard\charTranslit\enToGr("Test"));
        $this->assertEquals("Τεστ2", \catInBeard\charTranslit\enToGr("Test2"));
        $this->assertEquals("τεστ", \catInBeard\chartranslit\enToGr("test"));
    }
    public function testGrToEnSym()
    {
        $this->assertEquals("TestC", \catInBeard\charTranslit\grToEnSym("ΤεστΨ"));
        $this->assertEquals("TestC2", \catInBeard\charTranslit\grToEnSym("ΤεστΨ2"));
        $this->assertEquals("testC", \catInBeard\chartranslit\grToEnSym("τεστΨ"));
    }
    public function testEnToGrSym()
    {
        $this->assertEquals("ΤεστΨ", \catInBeard\charTranslit\enToGrSym("TestC"));
        $this->assertEquals("ΤεστΨ2", \catInBeard\charTranslit\enToGrSym("TestC2"));
        $this->assertEquals("τεστΨ", \catInBeard\chartranslit\enToGrSym("testC"));
    }
}
