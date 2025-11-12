<?php

namespace Modules\FactoryMethod\Factories;

use Modules\FactoryMethod\Contracts\NotificationInterface;

abstract class NotificationFactory
{
    abstract public function createNotification(): NotificationInterface;

    public function notify(string $message): string
    {
        $notification = $this->createNotification();

        return $notification->send($message);
    }
}
