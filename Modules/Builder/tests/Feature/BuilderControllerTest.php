<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Builder\Models\Product;
use Tests\TestCase;

uses(RefreshDatabase::class);
uses(TestCase::class)->in(__DIR__);

test('products index returns products filtered by price, availability and rating', function () {
    Product::factory()->create([
        'name' => 'too-cheap',
        'price' => 100,
        'is_available' => true,
        'rating' => 5,
    ]);
    Product::factory()->create([
        'name' => 'unavailable',
        'price' => 300,
        'is_available' => false,
        'rating' => 5,
    ]);
    Product::factory()->create([
        'name' => 'low-rating',
        'price' => 300,
        'is_available' => true,
        'rating' => 2,
    ]);

    $matchingA = Product::factory()->create([
        'name' => 'match-a',
        'price' => 250,
        'is_available' => true,
        'rating' => 4,
    ]);
    $matchingB = Product::factory()->create([
        'name' => 'match-b',
        'price' => 450,
        'is_available' => true,
        'rating' => 5,
    ]);

    $response = $this->get(route('builder.index'));

    $response->assertOk();

    $response->assertJsonCount(2);

    $response->assertJsonFragment(['name' => $matchingA->name]);
    $response->assertJsonFragment(['name' => $matchingB->name]);
});
