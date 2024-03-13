<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Product();
        $product->code = "01";
        $product->name = "COCA-COLA";
        $product->expiration_date = "2024-02-10";
        $product->description = "Coca-cola sin azúcar";
        $product->price = 25;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->code = "02";
        $product->name = "SPRITE";
        $product->expiration_date = "2024-02-10";
        $product->description = "segun su tamaño";
        $product->price = 7;
        $product->category_id = 1;
        $product->save();
        //
    }
}
