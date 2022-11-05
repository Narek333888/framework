<?php

namespace src\components\validator\src\Rules\Classes;

use src\components\validator\src\Rules\Interfaces\RuleInterface;

abstract class Rule implements RuleInterface
{
    /**
     * @param string $attribute
     * @return string
     */
    public function message(string $attribute): string
    {
        $rule = strtolower(basename(static::class));

        return sprintf('The %s must be %s', $attribute, $rule);
    }
}