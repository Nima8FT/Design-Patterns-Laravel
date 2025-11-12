<?php

namespace Modules\FactoryMethod\Notifications;

use Modules\FactoryMethod\Contracts\NotificationInterface;

class EmailNotification implements NotificationInterface
{
    public function send(string $message): string
    {
        return 'sending email '.$message;
    }
}
