<?php

namespace RajNishad\Assignment1\Model;

use Magento\Catalog\Api\Data\CategoryInterface;

class Test
{
    /**
     * @var CategoryInterface
     */
    private $category;

    /**
     * @var array
     */
    private $dataArray;

    /**
     * @var string
     */
    private $stringParam;

    /**
     * Constructor
     *
     * @param CategoryInterface $category
     * @param array $dataArray
     * @param string $stringParam
     */
    public function __construct(
        CategoryInterface $category,
        array $dataArray = [],
        string $stringParam = ''
    ) {
        $this->category = $category;
        $this->dataArray = $dataArray;
        $this->stringParam = $stringParam;
    }

    /**
     * Display parameters
     *
     * @return void
     */
    public function displayParams()
    {
        echo "<h3>String Parameter:</h3>";
        echo "<p>" . $this->stringParam . "</p>";

        echo "<h3>Array Parameter:</h3>";
        echo "<pre>";
        print_r($this->dataArray);
        echo "</pre>";
    }
}
