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
        $product->code = "1456fg";
        $product->name = "COCA-COLA ZERO";
        $product->expiration_date = "2024-02-10";
        $product->description = "Coca-Cola de 500ml";
        $product->price = 25;
        $product->category_id = 1;
        $product->save();

        $product2 = new Product();
        $product2->code = "45546";
        $product2->name = "COCA-COLA LIGHT";
        $product2->expiration_date = "2024-02-10";
        $product2->description = "Coca-Cola de 2,5L";
        $product2->price = 13;
        $product2->category_id = 1;
        $product2->save();


        $product3 = new Product();
        $product3->code = "6434";
        $product3->name = "FANTA MANDARINA";
        $product3->expiration_date = "2024-02-10";
        $product3->description = "Coca-Cola de 500ml";
        $product3->price = 7;
        $product3->category_id = 2;
        $product3->save();

    }
}
