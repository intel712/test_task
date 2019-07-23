<?php
namespace Tests;

use App\Helpers\QueryCleanHelper;
use PHPUnit_Framework_TestCase;

class HelperTest extends PHPUnit_Framework_TestCase
{
    public function testGetHelperTest(){
        $helper = new QueryCleanHelper();
        $string = 'The oppressor’s wrong    , the proud man’s  contumely, The pangs of dispriz’d love, the law’s delay!';
        $expected = 'The oppressor’s wrong the proud man’scontumely The pangs of dispriz’d love the law’s delay';
        $this->assertEquals($expected, $helper->clean($string));
    }
}
