<?php

namespace App\Helpers;

class QueryExactHelper
{
    public function exact(string $str): string
    {
        $str = trim($str);
        if (!$str) {
            echo 'Точная поисковая фраза не содержит слов';
        }

        if (!preg_match_all('/[\*\s]+/i', $str, $matches)) {
            return $str;
        }

        foreach ($matches[0] as $match) {
            $len = strlen(str_replace(' ', '', $match)) + 1;
            $str = str_replace($match, "<$len>", $str);
        }

        return (string)$str;
    }
}