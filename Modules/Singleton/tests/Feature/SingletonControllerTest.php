<?php

use Modules\Singleton\Http\Controllers\SingletonController;
use Modules\Singleton\Services\AppSetting;
use Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

it('controller index returns AppSetting config', function () {
    $this->app->config->set('site', [
        'timezone' => 'UTC',
    ]);

    $singleton = new SingletonController;
    $response = $singleton->index(new AppSetting);

    expect($response)->toMatchArray([
        'timezone' => 'UTC',
    ]);
});
