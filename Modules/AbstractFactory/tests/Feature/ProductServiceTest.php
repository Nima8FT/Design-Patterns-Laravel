<?php

use Modules\AbstractFactory\Factories\ModernFactory;
use Modules\AbstractFactory\Factories\VictorianFactory;
use Modules\AbstractFactory\Services\ProductService;

test('product service sends modern', function () {
    $factory = new ModernFactory;
    $service = new ProductService($factory);

    $output = $service->furnishRoom();

    expect($output)->toBe([
        'chair' => 'Sitting on a Modern Chair',
        'sofa' => 'Lying on a Modern Sofa',
        'table' => 'Placing items on a Modern Coffee Table',
    ]);
});

test('product service sends victorian', function () {
    $factory = new VictorianFactory;
    $service = new ProductService($factory);

    $output = $service->furnishRoom();

    expect($output)->toBe([
        'chair' => 'Sitting on a Victorian Chair',
        'sofa' => 'Lying on a Victorian Sofa',
        'table' => 'Placing items on a Victorian Coffee Table',
    ]);
});
