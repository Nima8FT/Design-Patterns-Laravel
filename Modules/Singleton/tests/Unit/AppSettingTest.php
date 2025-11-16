<?php

use Modules\Singleton\Services\AppSetting;
use Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

it('loads settings from config via AppSetting', function () {
    $this->app->config->set('site', [
        'timezone' => 'UTC',
    ]);

    $settings = new AppSetting;

    expect($settings->all())->toMatchArray(['timezone' => 'UTC']);
});
