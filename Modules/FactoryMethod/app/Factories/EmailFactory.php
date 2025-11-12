<?php

namespace Modules\FactoryMethod\Factories;

use Modules\FactoryMethod\Contracts\NotificationInterface;
use Modules\FactoryMethod\Notifications\EmailNotification;

class EmailFactory extends NotificationFactory
{
    public function createNotification(): NotificationInterface
    {
        return new EmailNotification;
    }
}
