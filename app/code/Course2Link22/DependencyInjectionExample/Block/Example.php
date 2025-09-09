<?php

namespace Course2Link22\DependencyInjectionExample\Block;

use Course2Link22\DependencyInjectionExample\Model\Main;

class Example extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array                                            $data
     */
    public function __construct(
        Main $main,
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->main = $main;
    }

    public function getMain(): Main
    {
        return $this->main;
    }
}
