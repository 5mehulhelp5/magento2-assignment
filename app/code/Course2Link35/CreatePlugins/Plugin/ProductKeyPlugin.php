<?php

namespace Course2Link35\CreatePlugins\Plugin;

use Course2Link35\CreatePlugins\Block\ProductView;

class ProductKeyPlugin
{
    // public function beforeGetProductName(ProductView $subject, $prefix)
    // {
    //     return ["prefix updated from plugin"];
    // }
    // public function afterGetProductName(ProductView $subject, $result)
    // {
    //     return $result . " (Modified by Plugin)";
    // }
    public function aroundGetProductName(ProductView $subject, callable $proceed, $prefix = "default val")
    {
        $prefix = "around upd";
        $result = $proceed($prefix);
        return $result . ' end upd';
    }
}
