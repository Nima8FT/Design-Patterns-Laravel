<?php

use Modules\AbstractFactory\Contracts\ChairInterface;
use Modules\AbstractFactory\Contracts\CoffeTableInterface;
use Modules\AbstractFactory\Contracts\SofaInterface;
use Modules\AbstractFactory\Products\Victorian\VictorianChair;
use Modules\AbstractFactory\Products\Victorian\VictorianCoffeTable;
use Modules\AbstractFactory\Products\Victorian\VictorianSofa;

test('victorian chair return message correctly', function () {
    $chair = new VictorianChair;
    $output = $chair->sitOn();

    expect($chair)->toBeInstanceOf(ChairInterface::class);
    expect($output)->toBe('Sitting on a Victorian Chair');
});

test('victorian sofa return message correctly', function () {
    $chair = new VictorianSofa;
    $output = $chair->lieOn();

    expect($chair)->toBeInstanceOf(SofaInterface::class);
    expect($output)->toBe('Lying on a Victorian Sofa');
});

test('victorian coffe table return message correctly', function () {
    $chair = new VictorianCoffeTable;
    $output = $chair->placeItems();

    expect($chair)->toBeInstanceOf(CoffeTableInterface::class);
    expect($output)->toBe('Placing items on a Victorian Coffee Table');
});
