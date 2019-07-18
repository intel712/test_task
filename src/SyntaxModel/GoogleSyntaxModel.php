<?php

namespace App\SyntaxModel;

class GoogleSyntaxModel extends AbstractSyntaxModel
{
    public function compare(string $match): bool
    {
        return strpos($match, ' ') !== false;
    }
}