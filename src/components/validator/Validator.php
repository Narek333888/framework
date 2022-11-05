<?php

namespace src\components\validator;

use src\components\validator\src\Core\Validator as BaseValidator;
use src\components\validator\src\Exceptions\UndefinedRuleException;

class Validator
{
    /**
     * @throws UndefinedRuleException
     */
    public static function make(array $rules, array $attributes): BaseValidator
    {
        return (new BaseValidator)
            ->setRules($rules)
            ->setAttributes($attributes)
            ->handle();
    }
}