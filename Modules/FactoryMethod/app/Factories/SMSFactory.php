<?php

namespace Modules\FactoryMethod\Factories;

use Modules\FactoryMethod\Contracts\NotificationInterface;
use Modules\FactoryMethod\Notifications\SMSNotification;

class SMSFactory extends NotificationFactory
{
    public function createNotification(): NotificationInterface
    {
        return new SMSNotification;
    }
}
