<?php

namespace Tests;

use App\Finder;
use PHPUnit_Framework_TestCase;

class TestTest extends PHPUnit_Framework_TestCase
{
    public function testGetExact() {
        $string = 'The oppressor’s wrong, the proud man’s  contumely, The pangs of dispriz’d love, the law’s delay';
        $test = new Finder();
        $expected = ["The", "oppressor’s", "wrong", "the", "proud", "man’s", "contumely", "The", "pangs",
            "of", "dispriz’d", "love", "the", "law’s", "delay"];
        $this->assertEquals($expected, $test($string));
    }
}
