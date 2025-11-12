<?php

use Modules\FactoryMethod\Factories\NotificationFactory;
use Modules\FactoryMethod\Services\NotificationService;
use Tests\TestCase;

uses(TestCase::class)->in(__DIR__);

test('factory method controller uses notification service', function () {
    $mockService = Mockery::mock(NotificationService::class);
    $mockService->shouldReceive('sendNotification')
        ->once()
        ->with(Mockery::type(NotificationFactory::class), 'nima')
        ->andReturn('sending email nima');

    $this->app->instance(NotificationService::class, $mockService);

    $response = $this->get(route('factorymethods.index'));

    $response->assertOk();

    $data = $response->json();
    expect($data)->toBe('sending email nima');

    Mockery::close();
});
