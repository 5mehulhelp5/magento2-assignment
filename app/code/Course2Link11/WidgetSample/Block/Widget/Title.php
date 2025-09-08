<?php

namespace Course2Link11\WidgetSample\Block\Widget;

use Magento\Widget\Block\BlockInterface;

use Magento\Framework\View\Element\Template;

class Title extends Template implements BlockInterface
{
    protected $_template = "widget/title.phtml";
}
