<?php

namespace App\SyntaxModel;

class YandexSyntaxModel extends AbstractSyntaxModel
{
    public function compare(string $match): bool
    {
        return strpos($match, ' ') !== false || $match[0] === '!';
    }
}