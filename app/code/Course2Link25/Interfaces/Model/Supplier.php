<?php

namespace Course2Link25\Interfaces\Model;

use Course2Link25\Interfaces\Api\Data\SupplierInterface;

class Supplier
{
    protected string $code;
    public function setCode(string $code)
    {
        $this->code = $code;
    }
    public function getCode(): string
    {
        return $this->code;
    }
}
