<?php

namespace Modules\AbstractFactory\Products\Victorian;

use Modules\AbstractFactory\Contracts\ChairInterface;

class VictorianChair implements ChairInterface
{
    public function sitOn(): string
    {
        return 'Sitting on a Victorian Chair';
    }
}
