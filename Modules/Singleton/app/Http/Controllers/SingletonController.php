<?php

namespace Modules\Singleton\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Singleton\Services\AppSetting;

class SingletonController extends Controller
{
    public function index(AppSetting $setting)
    {
        return $setting->all();
    }
}
