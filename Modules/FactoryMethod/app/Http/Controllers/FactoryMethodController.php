<?php

namespace Modules\FactoryMethod\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\FactoryMethod\Factories\SMSFactory;
use Modules\FactoryMethod\Factories\EmailFactory;
use Modules\FactoryMethod\Services\NotificationService;

class FactoryMethodController extends Controller
{
    protected NotificationService $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function index(): void
    {
        echo $this->notificationService->sendNotification(new EmailFactory(), 'nima');
    }
}
