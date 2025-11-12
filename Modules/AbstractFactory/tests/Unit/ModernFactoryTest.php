<?php

use Modules\AbstractFactory\Contracts\ChairInterface;
use Modules\AbstractFactory\Contracts\CoffeTableInterface;
use Modules\AbstractFactory\Contracts\ProductFactory;
use Modules\AbstractFactory\Contracts\SofaInterface;
use Modules\AbstractFactory\Factories\ModernFactory;

test('modern factory creates a modern chair', function () {
    $factory = new ModernFactory;
    $chair = $factory->createChair();

    expect($factory)->toBeInstanceOf(ProductFactory::class);
    expect($chair)->toBeInstanceOf(ChairInterface::class);
    expect($chair->sitOn())->toBe('Sitting on a Modern Chair');
});

test('modern factory creates a modern sofa', function () {
    $factory = new ModernFactory;
    $sofa = $factory->createSofa();

    expect($factory)->toBeInstanceOf(ProductFactory::class);
    expect($sofa)->toBeInstanceOf(SofaInterface::class);
    expect($sofa->lieOn())->toBe('Lying on a Modern Sofa');
});

test('modern factory creates a modern coffee table', function () {
    $factory = new ModernFactory;
    $table = $factory->createCoffeTable();

    expect($factory)->toBeInstanceOf(ProductFactory::class);
    expect($table)->toBeInstanceOf(CoffeTableInterface::class);
    expect($table->placeItems())->toBe('Placing items on a Modern Coffee Table');
});
