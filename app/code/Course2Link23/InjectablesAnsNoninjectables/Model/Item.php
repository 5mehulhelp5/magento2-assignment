<?php

namespace Course2Link23\InjectablesAnsNoninjectables\Model;

class Item
{
    protected string $code = ''; //we are putting a default value because else it will be null but return type of the methode is string
    public function setCode(string $code): void
    {
        $this->code = $code;
    }
    public function getCode(): string
    {
        return $this->code;
    }
}
