<?php

namespace RajNishad\Assignment3\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class HtmlLogger implements \Magento\Framework\Event\ObserverInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute(Observer $observer)
    {
        $response = $observer->getEvent()->getResponse();
        if ($response) {
            $html = $response->getBody();
            $this->logger->info("Page HTML:\n" . substr($html, 0, 500));
            // limit to 500 chars so system.log doesn’t explode
        }
    }
}
