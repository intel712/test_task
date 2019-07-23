<?php

namespace Tests;
use App\SyntaxModel\GoogleSyntaxModel;
use PHPUnit_Framework_TestCase;

class GoogleSyntaxModelTest extends \PHPUnit_Framework_TestCase
{
    public function testCompareTrue() {
        $model = new GoogleSyntaxModel();
        $string = 'The oppressor’s wrong    , the proud man’s  contumely, The pangs of dispriz’d love, the law’s delay!';
        $this->assertTrue($model->compare($string));
    }
}
