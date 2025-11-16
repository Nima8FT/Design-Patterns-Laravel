<?php

namespace Modules\Singleton\Services;

class AppSetting
{
    private array $settings = [];

    public function __construct()
    {
        $this->settings = config('site', []);
    }

    public function all(): array
    {
        return $this->settings;
    }
}
