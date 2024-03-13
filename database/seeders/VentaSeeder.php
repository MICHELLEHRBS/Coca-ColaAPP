<?php

namespace Database\Seeders;

use App\Models\Venta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $venta = new Venta();
        $venta->bought_date= "2024-03-05";
        $venta->numbe_venta = "1";
        $venta->payment = "Efectivo";
        $venta-> status = "Activo";
        $venta->save();
    }
}
