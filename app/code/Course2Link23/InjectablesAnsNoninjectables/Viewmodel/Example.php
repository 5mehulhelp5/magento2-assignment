<?php

namespace Course2Link23\InjectablesAnsNoninjectables\Viewmodel;

use Course2Link23\InjectablesAnsNoninjectables\Service\Demand;
use Course2Link23\InjectablesAnsNoninjectables\Service\Supply;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Example implements ArgumentInterface
{
    protected Supply $supply;
    protected Demand $demand;
    public function __construct(Supply $supply, Demand $demand)
    {
        $this->supply = $supply;
        $this->demand = $demand;
    }
    public function getSupply(): Supply
    {
        return $this->supply;
    }
    public function getDemand(): Demand
    {
        return $this->demand;
    }
}
