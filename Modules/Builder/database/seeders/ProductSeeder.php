<?php

namespace Modules\Builder\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Builder\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->count(10)->create();
        // $this->call([]);
    }
}
