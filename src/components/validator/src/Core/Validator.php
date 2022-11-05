<?php

namespace src\components\validator\src\Core;

use src\components\validator\src\Exceptions\UndefinedRuleException;
use src\components\validator\src\Rules\Interfaces\RuleInterface;

class Validator
{
    use ErrorsBag;

    protected array $rules = [];
    protected array $attributes = [];

    /**
     * @param array $rules
     * @return $this
     */
    public function setRules(array $rules): self
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * @param array $attributes
     * @return $this
     */
    public function setAttributes(array $attributes): self
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * @return $this
     * @throws UndefinedRuleException
     */
    public function handle(): self
    {
        foreach ($this->attributes as $attribute => $input)
        {
            $rules = $this->rules[$attribute];

            foreach ($rules as $rule)
            {
                /** @var RuleInterface $rule */
                if (! $rule instanceof RuleInterface)
                {
                    throw new UndefinedRuleException('Given rule must be instance of ' . RuleInterface::class);
                }

                if (! $rule->isPassed($input))
                {
                    $this->addError($attribute, $rule->message($attribute));
                }
            }
        }

        return $this;
    }
}