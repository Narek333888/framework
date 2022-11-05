<?php

namespace src\components\validator\src\Rules\Classes;

class Required extends Rule
{
    /**
     * @param string $input
     * @return bool
     */
    public function isPassed(string $input): bool
    {
        return ! empty($input);
    }
}