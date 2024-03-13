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
        $product->name = "COCA-COLA ZERO";
        $product->expiration_date = "2024-02-10";
        $product->description = "Coca-Cola de 500ml";
        $product->price = 25;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->code = "45546";
        $product->name = "COCA-COLA LIGHT";
        $product->expiration_date = "2024-02-10";
        $product->description = "Coca-Cola de 2,5L";
        $product->price = 13;
        $product->category_id = 1;
        $product->save();


        $product = new Product();
        $product->code = "6434";
        $product->name = "FANTA MANDARINA";
        $product->expiration_date = "2024-02-10";
        $product->description = "Coca-Cola de 500ml";
        $product->price = 7;
        $product->category_id = 2;
        $product->save();
        //
    }
}
