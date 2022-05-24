<?php

use PHPUnit\Framework\TestCase;

class TestGr extends TestCase
{
    public function testGrToEn()
    {
        $this->assertEquals("Test",\catInBeard\charTranslit\grToEn("Τεστ"));
        $this->assertEquals("Test2",\catInBeard\charTranslit\grToEn("Τεστ2"));
        $this->assertEquals("test",\catInBeard\chartranslit\grToEn("τεστ"));
    }
    public function testEnTogr()
    {
        $this->assertEquals("Τεστ",\catInBeard\charTranslit\enToGr("Test"));
        $this->assertEquals("Τεστ2",\catInBeard\charTranslit\enToGr("Test2"));
        $this->assertEquals("τεστ",\catInBeard\chartranslit\enToGr("test"));
    }
}