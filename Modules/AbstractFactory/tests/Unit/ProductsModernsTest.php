<?php

use Modules\AbstractFactory\Contracts\ChairInterface;
use Modules\AbstractFactory\Contracts\CoffeTableInterface;
use Modules\AbstractFactory\Contracts\SofaInterface;
use Modules\AbstractFactory\Products\Modern\ModernChair;
use Modules\AbstractFactory\Products\Modern\ModernCoffeTable;
use Modules\AbstractFactory\Products\Modern\ModernSofa;

test('modern chair return message correctly', function () {
    $chair = new ModernChair;
    $output = $chair->sitOn();

    expect($chair)->toBeInstanceOf(ChairInterface::class);
    expect($output)->toBe('Sitting on a Modern Chair');
});

test('modern sofa return message correctly', function () {
    $chair = new ModernSofa;
    $output = $chair->lieOn();

    expect($chair)->toBeInstanceOf(SofaInterface::class);
    expect($output)->toBe('Lying on a Modern Sofa');
});

test('modern coffe table return message correctly', function () {
    $chair = new ModernCoffeTable;
    $output = $chair->placeItems();

    expect($chair)->toBeInstanceOf(CoffeTableInterface::class);
    expect($output)->toBe('Placing items on a Modern Coffee Table');
});
