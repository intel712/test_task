<?php

namespace App;

use App\SyntaxModel\SyntaxModelResolver;

class Finder
{
    public function __invoke(string $search, string $syntaxModelName = 'google')
    {
        // TODO это можно вынести в отдельный класс, который будет заниматься этой проверкой.
        $search = trim($search);
        if (!$search || !preg_match_all('/(-?[^\s"]+)|"(.+?)"/ui', $search, $matches)) {
            return null;
        }
        $resolver = new SyntaxModelResolver();
        $syntaxModelName = $resolver->resolve($syntaxModelName);
        $result = $syntaxModelName->handle($matches[0]);

        return $result;
    }
}
