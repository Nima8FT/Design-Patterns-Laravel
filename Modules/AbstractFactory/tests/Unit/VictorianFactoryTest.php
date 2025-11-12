<?php

use Modules\AbstractFactory\Contracts\ChairInterface;
use Modules\AbstractFactory\Contracts\CoffeTableInterface;
use Modules\AbstractFactory\Contracts\ProductFactory;
use Modules\AbstractFactory\Contracts\SofaInterface;
use Modules\AbstractFactory\Factories\VictorianFactory;

test('victorian factory creates a victorian chair', function () {
    $factory = new VictorianFactory;
    $chair = $factory->createChair();

    expect($factory)->toBeInstanceOf(ProductFactory::class);
    expect($chair)->toBeInstanceOf(ChairInterface::class);
    expect($chair->sitOn())->toBe('Sitting on a Victorian Chair');
});

test('victorian factory creates a victorian sofa', function () {
    $factory = new VictorianFactory;
    $sofa = $factory->createSofa();

    expect($factory)->toBeInstanceOf(ProductFactory::class);
    expect($sofa)->toBeInstanceOf(SofaInterface::class);
    expect($sofa->lieOn())->toBe('Lying on a Victorian Sofa');
});

test('victorian factory creates a victorian coffee table', function () {
    $factory = new VictorianFactory;
    $table = $factory->createCoffeTable();

    expect($factory)->toBeInstanceOf(ProductFactory::class);
    expect($table)->toBeInstanceOf(CoffeTableInterface::class);
    expect($table->placeItems())->toBe('Placing items on a Victorian Coffee Table');
});
