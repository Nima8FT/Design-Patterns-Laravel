<?php

namespace Modules\AbstractFactory\Products\Modern;

use Modules\AbstractFactory\Contracts\ChairInterface;

class ModernChair implements ChairInterface
{
    public function sitOn(): string
    {
        return 'Sitting on a Modern Chair';
    }
}
