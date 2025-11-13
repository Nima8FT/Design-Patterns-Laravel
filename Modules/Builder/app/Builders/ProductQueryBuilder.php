<?php

namespace Modules\Builder\Builders;

use Illuminate\Database\Eloquent\Collection;
use Modules\Builder\Models\Product;

class ProductQueryBuilder
{
    protected $query;

    public function __construct()
    {
        $this->query = Product::query();
    }

    public function priceRange(int $min, int $max): self
    {
        if ($min !== null && $max !== null) {
            $this->query->whereBetween('price', [$min, $max]);
        }

        return $this;
    }

    public function available(): self
    {
        $this->query->where('is_available', true);

        return $this;
    }

    public function rating(int $rating): self
    {
        if ($rating) {
            $this->query->where('rating', '>=', $rating);
        }

        return $this;
    }

    public function get(): Collection
    {
        return $this->query->get();
    }
}
