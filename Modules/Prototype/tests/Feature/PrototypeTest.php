<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Builder\Models\Product;
use Modules\Prototype\Prototype\ProductPrototype;
use Tests\TestCase;

uses(RefreshDatabase::class);
uses(TestCase::class)->in(__DIR__);

test('manual prototype creates independent clone', function () {
    $product1 = new ProductPrototype('Laptop', 800, 3);
    $product2 = $product1->clone();
    $product2->price = 500;

    expect($product1->price)->toBe(800);
    expect($product2->price)->toBe(500);

    expect($product1)->not()->toBe($product2);
});

test('creates an independent clone for Laravel Eloquent prototype', function () {
    $product1 = Product::create([
        'name' => 'Laptop',
        'price' => 500,
        'rating' => 3,
    ]);

    $product2 = $product1->replicate();
    $product2->price = 900;
    $product2->save();

    $product1->refresh();

    expect($product1->price)->toBe(500);
    expect($product2->price)->toBe(900);

    expect($product1->id)->not()->toBe($product2->id);
});
