<?php

use Modules\FactoryMethod\Factories\EmailFactory;
use Modules\FactoryMethod\Factories\NotificationFactory;

test('email factory notify method calls notification send', function () {
    $factory = new EmailFactory;
    $message = 'Test message';

    $output = $factory->notify($message);

    expect($factory)->toBeInstanceOf(NotificationFactory::class);
    expect($output)->toBe('sending email '.$message);
});
