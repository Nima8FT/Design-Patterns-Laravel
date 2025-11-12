<?php

namespace Modules\AbstractFactory\Products\Modern;

use Modules\AbstractFactory\Contracts\SofaInterface;

class ModernSofa implements SofaInterface
{
    public function lieOn(): string
    {
        return 'Lying on a Modern Sofa';
    }
}
