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
}