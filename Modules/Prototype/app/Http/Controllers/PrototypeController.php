<?php

namespace Modules\Prototype\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Builder\Models\Product;
use Modules\Prototype\Prototype\ProductPrototype;

class PrototypeController extends Controller
{
    // create manaual prototype design pattern
    public function index(): JsonResponse
    {
        $product1 = new ProductPrototype('Laptop', 500, 3);
        $product2 = $product1->clone();
        $product2->price = 900;

        return response()->json([
            'product1' => $product1,
            'product2' => $product2,
        ]);
    }

    // use laravel prototype design pattern
    public function laravelPrototype(): JsonResponse
    {
        $product1 = Product::create([
            'name' => 'Laptop',
            'price' => 500,
            'rating' => 3,
        ]);

        $product2 = $product1->replicate();
        $product2->price = 900;
        $product2->save();

        return response()->json([
            'product1' => $product1,
            'product2' => $product2,
        ]);
    }
}
