<?php

namespace Tests;
use App\SyntaxModel\YandexSyntaxModel;
use PHPUnit_Framework_TestCase;

class AbstractSyntaxYandexModelTest extends \PHPUnit_Framework_TestCase
{
    public function testCompareTrue() {
        $model = new YandexSyntaxModel();
        $string = 'The oppressor’s wrong    , the proud man’s  contumely, The pangs of dispriz’d love, the law’s delay';
        $this->assertTrue($model->compare($string));
    }
}
