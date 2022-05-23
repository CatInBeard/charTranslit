<?php
//include_once('../vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class TestRu extends TestCase
{
    public function testEnToRu()
    {
        $this->assertEquals("Тест",\catinbeard\chartranslit\enToRu("Test"));
        $this->assertEquals("Тест2",\catinbeard\chartranslit\enToRu("Test2"));
        $this->assertEquals("тест",\catinbeard\chartranslit\enToRu("test"));
    }
    public function testRuToEn()
    {
        $this->assertEquals("Test",\catinbeard\chartranslit\ruToEn("Тест"));
        $this->assertEquals("Test2",\catinbeard\chartranslit\ruToEn("Тест2"));
        $this->assertEquals("test",\catinbeard\chartranslit\ruToEn("тест"));
    }

    
}




//    /**
//     * @depends testOne
//     */
//    public function testTwo()
//    {
//    }