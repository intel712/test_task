<?php

namespace App;

/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 17.07.2019
 * Time: 17:47
 */
class Config
{
    public $exclude = [',', '\t', '  ', '!']; //Символы которые мы исключим при разбике строки
    public $syntaxModel = 'google'; //Алгоритм поиска по строке
}