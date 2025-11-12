<?php

use Modules\FactoryMethod\Factories\NotificationFactory;
use Modules\FactoryMethod\Factories\SMSFactory;

test('email factory notify method calls notification send', function () {
    $factory = new SMSFactory;
    $message = 'Test message';

    $output = $factory->notify($message);

    expect($factory)->toBeInstanceOf(NotificationFactory::class);
    expect($output)->toBe('sending sms '.$message);
});
