<?php

namespace Course2Link24\ReplaceConstructorArguments\Model;

class UppercaseName extends DefaultName
{
    public function getName(): string
    {
        return strtoupper(parent::getName());
    }
}
