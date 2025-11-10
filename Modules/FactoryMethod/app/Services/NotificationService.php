<?php 

namespace Modules\FactoryMethod\Services;

use Modules\FactoryMethod\Factories\NotificationFactory;

class NotificationService {
    public function sendNotification(NotificationFactory $notification, string $message) {
        $notification->notify($message);
    }
}