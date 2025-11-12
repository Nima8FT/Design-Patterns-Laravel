<?php

use Modules\FactoryMethod\Contracts\NotificationInterface;
use Modules\FactoryMethod\Notifications\EmailNotification;

test('email notification sends message correctly', function () {
    $notification = new EmailNotification;
    $message = 'Hello World';

    $output = $notification->send($message);

    expect($notification)->toBeInstanceOf(NotificationInterface::class);
    expect($output)->toBe('sending email '.$message);
});
