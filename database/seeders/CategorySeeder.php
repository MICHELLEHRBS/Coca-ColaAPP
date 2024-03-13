<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $category = new Category;
        $category->name = "Coca-Cola";
        $category->detail = "Todo tipo de Coca-Cola";
        $category->status ="Activo";
        $category->save();

        $category2 = new Category;
        $category2->name = "Fanta";
        $category2->detail = "Todo tipo de Fantas";
        $category2->status ="Activo";
        $category2->save();
    }
}
