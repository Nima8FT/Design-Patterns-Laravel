<?php

namespace Modules\Builder\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Builder\Builders\ProductQueryBuilder;

class BuilderController extends Controller
{
    public function index()
    {
        $builder = new ProductQueryBuilder;

        $products = $builder->priceRange(200, 500)
            ->available()
            ->rating(4)
            ->get();

        return response()->json($products);
    }
}
