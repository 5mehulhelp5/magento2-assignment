<?php

namespace Vendor\Module\Model;

class HeavyClass
{
    public function __construct()
    {
        // simulate heavy operation
        for ($i = 0; $i < 1000000000; $i++) {
            // just looping to waste time
        }
    }

    public function doSomething()
    {
        return "Heavy class executed!";
    }
}
