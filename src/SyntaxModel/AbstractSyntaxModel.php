<?php

namespace App\SyntaxModel;

use App\Helpers\QueryCleanHelper;
use App\Helpers\QueryExactHelper;

abstract class AbstractSyntaxModel implements SyntaxModelInterface
{
    abstract public function compare(string $match): bool;

    public function handle(array $matches): array
    {
        $cleanHelper = new QueryCleanHelper();
        $exactHelper = new QueryExactHelper();

        $result = [];
        foreach ($matches as $index => $match) {
            $condition = $this->compare($match);
            if ($condition) {
                $result[] = $exactHelper->exact($match);
                continue;
            }
            // Это можно заменить на QueryBuilder, в котором будет проверка на == OR, == AND, == NOT OR и прочее.
            if ($match === 'OR') {
                if ($index !== 0 && !empty($matches[$index + 1])) {
                    $result[] = '||';
                }
                continue;
            }
            $result[] = $cleanHelper->clean($match);
        }
        $result = array_filter($result);

        return $result;
    }
}