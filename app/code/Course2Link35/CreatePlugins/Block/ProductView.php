<?php

namespace Course2Link35\CreatePlugins\Block;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\RequestInterface;

class ProductView extends Template
{
    protected $productRepository;
    protected $request;

    public function __construct(
        Template\Context $context,
        ProductRepositoryInterface $productRepository,
        RequestInterface $request,
        array $data = []
    ) {
        $this->productRepository = $productRepository;
        $this->request = $request;
        parent::__construct($context, $data);
    }

    public function getProductName($prefix = 'default val')
    {
        $id = $this->request->getParam('id');
        return $prefix . "=" . $id;
    }
}
