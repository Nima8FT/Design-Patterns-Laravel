<?php

namespace Modules\AbstractFactory\Contracts;

interface ProductFactory
{
    public function createChair(): ChairInterface;

    public function createSofa(): SofaInterface;

    public function createCoffeTable(): CoffeTableInterface;
}
