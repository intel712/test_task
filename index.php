<?php

require_once 'vendor/autoload.php';

use App\Finder;
use App\Helpers\QueryExactHelper;

$ob = new Finder();

$string = 'The oppressor’s wrong    , the proud man’s  contumely, The pangs of dispriz’d love, the law’s delay!';

$result = $ob($string);
$helper = new QueryExactHelper();
var_dump($helper->exact($string));
echo '<pre>';
var_dump($result);
echo '</pre>';
