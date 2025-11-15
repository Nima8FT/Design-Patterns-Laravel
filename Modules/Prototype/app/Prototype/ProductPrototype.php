<?php

namespace Modules\Prototype\Prototype;

use Modules\Prototype\Contracts\PrototypeInterface;

class ProductPrototype implements PrototypeInterface
{
    public string $name;

    public int $price;

    public int $rating;

    public function __construct(string $name, int $price, int $rating)
    {
        $this->name = $name;
        $this->price = $price;
        $this->rating = $rating;
    }

    public function clone(): PrototypeInterface
    {
        return clone $this;
    }
}
