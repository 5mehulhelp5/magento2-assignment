<?php

namespace Course2Link23\InjectablesAnsNoninjectables\Model;

class Supplier
{
    protected string $code;
    public function setCode(string $code): void
    {
        $this->code = $code;
    }
    public function getCode(): string
    {
        return $this->code;
    }
}
