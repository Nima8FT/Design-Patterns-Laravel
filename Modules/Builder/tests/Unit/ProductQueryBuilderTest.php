<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Builder\Builders\ProductQueryBuilder;
use Modules\Builder\Models\Product;
use Tests\TestCase;

uses(TestCase::class, RefreshDatabase::class);

test('test filters by price range', function () {
    Product::create([
        'name' => 'product1',
        'price' => 250,
    ]);

    Product::create([
        'name' => 'product3',
        'price' => 400,
    ]);

    $builder = new ProductQueryBuilder;

    $response = $builder->priceRange(200, 300)->get();

    expect($response)->toHaveCount(1);
});

test('test filters by available', function () {
    Product::create([
        'name' => 'product1',
        'price' => 250,
        'is_available' => true,
    ]);

    Product::create([
        'name' => 'product3',
        'price' => 400,
        'is_available' => false,
    ]);

    $builder = new ProductQueryBuilder;

    $response = $builder->available()->get();

    expect($response)->toHaveCount(1);
});

test('test filters by rating', function () {
    Product::create([
        'name' => 'product1',
        'price' => 250,
        'rating' => 2,
    ]);

    Product::create([
        'name' => 'product3',
        'price' => 400,
        'rating' => 5,
    ]);

    $builder = new ProductQueryBuilder;

    $response = $builder->rating(5)->get();

    expect($response)->toHaveCount(1);
});
