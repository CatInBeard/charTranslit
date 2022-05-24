<?php

use PHPUnit\Framework\TestCase;

class TestDe extends TestCase
{
    public function testEnToDe()
    {
        $this->assertEquals("Test",\catInBeard\charTranslit\enToDe("Test"));
        $this->assertEquals("Test2",\catInBeard\charTranslit\enToDe("Test2"));
        $this->assertEquals("test",\catInBeard\chartranslit\enToDe("test"));
    }
    public function testDeToEn()
    {
        $this->assertEquals("Test",\catInBeard\chartranslit\deToEn("Test"));
        $this->assertEquals("Test2",\catInBeard\chartranslit\deToEn("Test2"));
        $this->assertEquals("test",\catInBeard\chartranslit\deToEn("test"));
        $this->assertEquals("EaeaYoo",\catInBeard\chartranslit\deToEn("ÄäÜö"));
    }
    public function testEnToDeSym()
    {
        $this->assertEquals("Qwertz",\catInBeard\charTranslit\enToDeSym("Qwerty"));
        $this->assertEquals("ÄäÜö",\catInBeard\charTranslit\enToDeSym("\"'{;"));
    }
    public function testDeToEnSym()
    {
        $this->assertEquals("Qwerty",\catInBeard\charTranslit\deToEnSym("Qwertz"));
        $this->assertEquals("\"'{;",\catInBeard\charTranslit\deToEnSym("ÄäÜö"));
    }
}