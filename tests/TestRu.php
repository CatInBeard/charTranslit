<?php
//include_once('../vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class TestRu extends TestCase
{
    public function testEnToRu()
    {
        $this->assertEquals("Тест",\catInBeard\charTranslit\enToRu("Test"));
        $this->assertEquals("Тест2",\catInBeard\charTranslit\enToRu("Test2"));
        $this->assertEquals("тест",\catInBeard\chartranslit\enToRu("test"));
    }
    public function testRuToEn()
    {
        $this->assertEquals("Test",\catInBeard\chartranslit\ruToEn("Тест"));
        $this->assertEquals("Test2",\catInBeard\chartranslit\ruToEn("Тест2"));
        $this->assertEquals("test",\catInBeard\chartranslit\ruToEn("тест"));
    }

    
}




//    /**
//     * @depends testOne
//     */
//    public function testTwo()
//    {
//    }