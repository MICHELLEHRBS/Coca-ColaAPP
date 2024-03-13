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

        $category = new Category;
        $category->name = "Fanta";
        $category->detail = "Todo tipo de Fantas";
        $category->status ="Activo";
        $category->save();
    }
}
