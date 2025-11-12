<?php

namespace Modules\FactoryMethod\Contracts;

interface NotificationInterface
{
    public function send(string $message): string;
}
