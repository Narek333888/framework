<?php

namespace src\components\validator\src\Rules\Classes;

class Alphabetical extends Rule
{
    /**
     * @param string $input
     * @return bool
     */
    public function isPassed(string $input): bool
    {
        return ctype_alpha($input);
    }
}