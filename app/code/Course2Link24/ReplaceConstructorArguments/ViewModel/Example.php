<?php

namespace Course2Link24\ReplaceConstructorArguments\ViewModel;

use Course2Link24\ReplaceConstructorArguments\Model\DefaultName;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Example implements ArgumentInterface
{
    protected DefaultName $defaultname;

    public function __construct(DefaultName $defaultname)
    {
        $this->defaultname = $defaultname;
    }

    public function getName(): string
    {
        return $this->defaultname->getName();
    }
}
