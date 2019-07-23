<?php

namespace Tests;

use App\Helpers\QueryExactHelper;
use PHPUnit_Framework_TestCase;

class ExactHelperTest extends \PHPUnit_Framework_TestCase
{
    public function testGetExactHelperTest(){
        $helper = new QueryExactHelper();
        $string = 'The oppressor’s wrong    , the proud man’s  contumely, The pangs of dispriz’d love, the law’s delay!';
        $expected = 'The<1>oppressor’s<1>wrong<1><1><1><1>,<1>the<1>proud<1>man’s<1><1>contumely,<1>The<1>pangs<1>of<1>dispriz’d<1>love,<1>the<1>law’s<1>delay!';
        $this->assertEquals($expected, $helper->exact($string));
    }
}
