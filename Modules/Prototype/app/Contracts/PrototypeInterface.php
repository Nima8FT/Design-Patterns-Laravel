<?php

namespace Modules\Prototype\Contracts;

interface PrototypeInterface
{
    public function clone(): PrototypeInterface;
}
