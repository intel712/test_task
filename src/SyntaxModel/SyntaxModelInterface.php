<?php

namespace App\SyntaxModel;

interface SyntaxModelInterface
{
    public function handle(array $matches): array;
}