<?php

namespace App\Helpers;

use App\Config;

class QueryCleanHelper
{
    public function clean(string $string)
    {
        $config = $this->getConfig();

        return str_replace($config->exclude, '', $string);
    }

    private function getConfig(): Config
    {
        return new Config();
    }
}