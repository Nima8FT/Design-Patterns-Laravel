<?php

use Modules\FactoryMethod\Contracts\NotificationInterface;
use Modules\FactoryMethod\Notifications\SMSNotification;

test('email notification sends message correctly', function () {
    $notification = new SMSNotification;
    $message = 'Hello World';

    $output = $notification->send($message);

    expect($notification)->toBeInstanceOf(NotificationInterface::class);
    expect($output)->toBe('sending sms '.$message);
});
