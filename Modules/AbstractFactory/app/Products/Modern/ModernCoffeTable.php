<?php

namespace Modules\AbstractFactory\Products\Modern;

use Modules\AbstractFactory\Contracts\CoffeTableInterface;

class ModernCoffeTable implements CoffeTableInterface
{
    public function placeItems(): string
    {
        return 'Placing items on a Modern Coffee Table';
    }
}
