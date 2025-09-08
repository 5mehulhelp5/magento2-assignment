<?php

namespace Course2Link23\InjectablesAnsNoninjectables\Service;

use Course2Link23\InjectablesAnsNoninjectables\Model\Item;
use Course2Link23\InjectablesAnsNoninjectables\Model\ItemFactory;
use Course2Link23\InjectablesAnsNoninjectables\Model\Supplier;

class Supply
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
        $this->supplier->setCode('945894id83jf438jf93jf8498282888888');
        return $this->supplier;
    }
    public function getItem(): Item
    {
        $item = $this->itemfactory->create();
        $item->setCode('item:209240902');
        return $item;
    }
}
