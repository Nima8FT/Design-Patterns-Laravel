<?php

namespace Modules\AbstractFactory\Products\Victorian;

use Modules\AbstractFactory\Contracts\SofaInterface;

class VictorianSofa implements SofaInterface
{
    public function lieOn(): string
    {
        return 'Lying on a Victorian Sofa';
    }
}
