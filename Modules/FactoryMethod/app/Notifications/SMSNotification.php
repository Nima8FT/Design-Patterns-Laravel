<?php

namespace Modules\FactoryMethod\Notifications;

use Modules\FactoryMethod\Contracts\NotificationInterface;

class SMSNotification implements NotificationInterface
{
    public function send(string $message): void
    {
        echo 'sending sms ' . $message;
    }
}
