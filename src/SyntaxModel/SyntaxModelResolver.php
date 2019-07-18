<?php

namespace App\SyntaxModel;

class SyntaxModelResolver
{
    public function resolve(string $modelName): SyntaxModelInterface
    {
        if ($modelName === 'google'){
            return new GoogleSyntaxModel();
        }
        if ($modelName === 'yandex'){
            return new YandexSyntaxModel();
        }

        throw new \InvalidArgumentException("Модель синтаксиса $modelName не поддерживается");
    }
}