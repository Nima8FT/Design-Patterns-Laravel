<?php

namespace Modules\FactoryMethod\Notifications;

use Modules\FactoryMethod\Contracts\NotificationInterface;

class EmailNotification implements NotificationInterface
{
    public function send(string $message): void
    {
        echo 'sending email ' . $message;
    }
}
