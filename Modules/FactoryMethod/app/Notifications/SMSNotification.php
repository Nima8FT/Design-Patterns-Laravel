<?php

namespace Modules\FactoryMethod\Notifications;

use Modules\FactoryMethod\Contracts\NotificationInterface;

class SMSNotification implements NotificationInterface
{
    public function send(string $message): string
    {
        return 'sending sms '.$message;
    }
}
