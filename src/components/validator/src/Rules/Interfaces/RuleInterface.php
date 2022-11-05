<?php

namespace src\components\validator\src\Rules\Interfaces;

interface RuleInterface
{
    /**
     * @param string $input
     * @return bool
     */
    public function isPassed(string $input): bool;

    /**
     * @param string $attribute
     * @return string
     */
    public function message(string $attribute): string;
}