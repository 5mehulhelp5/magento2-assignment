<?php

namespace Course2Link38\DispatchEventExample\Observer;

use Course2Link38\DispatchEventExample\Block\Example;

class ContentExample implements \Magento\Framework\Event\ObserverInterface
{
    public function __construct()
    {
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $page = $observer->getData('page');
        $page->getLayout()->addBlock(Example::class, 'example_content', 'content');
    }
}
