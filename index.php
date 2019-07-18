<?php

require_once 'vendor/autoload.php';

use App\Finder;

$ob = new Finder();

$string = 'The oppressor’s wrong    , the proud man’s  contumely, The pangs of dispriz’d love, the law’s delay!';

$result = $ob($string);

echo '<pre>';
var_dump($result);
echo '</pre>';
