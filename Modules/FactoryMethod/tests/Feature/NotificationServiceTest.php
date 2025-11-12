<?php

use Modules\FactoryMethod\Factories\EmailFactory;
use Modules\FactoryMethod\Factories\SMSFactory;
use Modules\FactoryMethod\Services\NotificationService;

test('notification service sends email notification', function () {
    $service = new NotificationService;
    $factory = new EmailFactory;
    $message = 'Test email message';

    $output = $service->sendNotification($factory, $message);

    expect($output)->toBe('sending email '.$message);
});

test('notification service sends sms notification', function () {
    $service = new NotificationService;
    $factory = new SMSFactory;
    $message = 'Test sms message';

    $output = $service->sendNotification($factory, $message);

    expect($output)->toBe('sending sms '.$message);
});
