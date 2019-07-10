<?php


namespace Tests\Setup;

use App\Product;
use App\User;

class ProductFactory
{
    public function create()
    {
        $product = factory(Product::class)->create([
         'owner_id' => factory(User::class)
        ]);
    }
}