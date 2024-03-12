<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->date('bought_date');
            $table->string('numbe_venta', 20);
            $table->enum('payment', ['Efectivo', 'Tarjeta', 'QR']);
            $table->string('status', 10);

            $table->unsignedBigInteger('proveedor_id');
            $table->foreing('proveedor_id')->references('id')->on('proveedores')->onDelete('cascade');


            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->timestamps();


        });


        Schema::create('venta_product', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('venta_id');
            $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('cascade');
            $table->unsignedBigInteger('departament_id');
            $table->foreign('departament_id')->references('id')->on('departaments')->onDelete('cascade');

        });

    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
