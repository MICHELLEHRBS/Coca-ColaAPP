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
        Schema::create('proveedor_venta', function (Blueprint $table) {
            $table->id();
            $table->integer('proveedor_id');
            $table->integer('proveedor_id')->references('id')->on('proveedores')->onDe.ete('cascade');

            $table->integer('venta_id');
            $table->integer('venta_id')->references('id')->on('ventas')->onDe.ete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedor_venta');
    }
};
