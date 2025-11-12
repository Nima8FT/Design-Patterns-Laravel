<?php

namespace Modules\AbstractFactory\Factories;

use Modules\AbstractFactory\Contracts\ChairInterface;
use Modules\AbstractFactory\Contracts\CoffeTableInterface;
use Modules\AbstractFactory\Contracts\ProductFactory;
use Modules\AbstractFactory\Contracts\SofaInterface;
use Modules\AbstractFactory\Products\Modern\ModernChair;
use Modules\AbstractFactory\Products\Modern\ModernCoffeTable;
use Modules\AbstractFactory\Products\Modern\ModernSofa;

class ModernFactory implements ProductFactory
{
    public function createChair(): ChairInterface
    {
        return new ModernChair;
    }

    public function createSofa(): SofaInterface
    {
        return new ModernSofa;
    }

    public function createCoffeTable(): CoffeTableInterface
    {
        return new ModernCoffeTable;
    }
}
