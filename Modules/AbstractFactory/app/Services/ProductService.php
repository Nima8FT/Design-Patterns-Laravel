<?php

namespace Modules\AbstractFactory\Services;

use Modules\AbstractFactory\Contracts\ProductFactory;

class ProductService
{
    protected ProductFactory $factory;

    public function __construct(ProductFactory $factory)
    {
        $this->factory = $factory;
    }

    public function furnishRoom(): array
    {
        $chair = $this->factory->createChair();
        $sofa = $this->factory->createSofa();
        $table = $this->factory->createCoffeTable();

        return [
            'chair' => $chair->sitOn(),
            'sofa' => $sofa->lieOn(),
            'table' => $table->placeItems(),
        ];
    }
}
