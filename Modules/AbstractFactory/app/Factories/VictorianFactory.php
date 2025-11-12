<?php

namespace Modules\AbstractFactory\Factories;

use Modules\AbstractFactory\Contracts\ChairInterface;
use Modules\AbstractFactory\Contracts\CoffeTableInterface;
use Modules\AbstractFactory\Contracts\ProductFactory;
use Modules\AbstractFactory\Contracts\SofaInterface;
use Modules\AbstractFactory\Products\Victorian\VictorianChair;
use Modules\AbstractFactory\Products\Victorian\VictorianCoffeTable;
use Modules\AbstractFactory\Products\Victorian\VictorianSofa;

class VictorianFactory implements ProductFactory
{
    public function createChair(): ChairInterface
    {
        return new VictorianChair;
    }

    public function createSofa(): SofaInterface
    {
        return new VictorianSofa;
    }

    public function createCoffeTable(): CoffeTableInterface
    {
        return new VictorianCoffeTable;
    }
}
