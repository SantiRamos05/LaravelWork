<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Jenssegers\Mongodb\Schema\Blueprint as Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('idPedido');
            $table->integer('idCuenta');
            $table->string('producto');
            $table->integer('cantidad');
            $table->decimal('valor', 8, 2);
            $table->decimal('total', 8, 2);
            $table->timestamps();

            $table->index('idCuenta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
