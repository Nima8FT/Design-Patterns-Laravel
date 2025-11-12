<?php

namespace Modules\AbstractFactory\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\AbstractFactory\Factories\ModernFactory;
use Modules\AbstractFactory\Services\ProductService;

class AbstractFactoryController extends Controller
{
    public function index(): JsonResponse
    {
        $service = new ProductService(new ModernFactory);

        return response()->json($service->furnishRoom());
    }
}
