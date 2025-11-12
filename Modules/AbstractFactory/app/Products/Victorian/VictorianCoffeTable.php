<?php

namespace Modules\AbstractFactory\Products\Victorian;

use Modules\AbstractFactory\Contracts\CoffeTableInterface;

class VictorianCoffeTable implements CoffeTableInterface
{
    public function placeItems(): string
    {
        return 'Placing items on a Victorian Coffee Table';
    }
}
