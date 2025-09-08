<?php

namespace Course2Link23\InjectablesAnsNoninjectables\Service;

use Course2Link23\InjectablesAnsNoninjectables\Model\Item;
use Course2Link23\InjectablesAnsNoninjectables\Model\ItemFactory; //this gets auto generated when setup:di:compile
use Course2Link23\InjectablesAnsNoninjectables\Model\Supplier;

class Demand
{
    protected Supplier $supplier;
    protected ItemFactory $itemfactory;
    public function __construct(Supplier $supplier, ItemFactory $itemfactory)
    {
        $this->supplier = $supplier;
        $this->itemfactory = $itemfactory;
    }
    public function getSupplier(): Supplier
    {
        return $this->supplier;
    }
    public function getItem(): Item
    {
        return $this->itemfactory->create();
    }
}
