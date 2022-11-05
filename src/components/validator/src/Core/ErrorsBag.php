<?php

namespace src\components\validator\src\Core;

trait ErrorsBag
{
    protected array $errors = [];

    /**
     * @param string $attribute
     * @param string $message
     * @return void
     */
    public function addError(string $attribute, string $message): void
    {
        $this->errors[$attribute][] = $message;
    }

    /**
     * @return bool
     */
    public function hasErrors(): bool
    {
        return (bool) $this->errors;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}