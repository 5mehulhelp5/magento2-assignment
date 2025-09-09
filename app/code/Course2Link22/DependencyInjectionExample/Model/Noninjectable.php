<?php

declare(strict_types=1);

namespace Course2Link22\DependencyInjectionExample\Model;

class Noninjectable
{
    public function __construct()
    {
    }
    public function getId(): string
    {
        return 'class noninjectable : random 3481u4189jd2';
    }
}
