<?php

namespace RajNishad\Assignment3\Observer;

use Magento\Framework\Event\Observer;

use Psr\Log\LoggerInterface;

use Magento\Framework\Event\ObserverInterface;

class ProductViewLogger implements \Magento\Framework\Event\ObserverInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $product = $observer->getEvent()->getProduct();
        if ($product) {
            $this->logger->info("Product Viewed: " . $product->getName());
        }
    }
}
