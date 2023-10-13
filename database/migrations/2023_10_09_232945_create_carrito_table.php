<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrito', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // Si los usuarios están autenticados
            $table->unsignedBigInteger('producto_id');
            $table->integer('cantidad');
//              $table->string()
            $table->decimal('precio', 10, 2);
            $table->timestamps();

            // Definir relaciones
            $table->foreign('user_id')->references('id')->on('users'); // Ajusta esto según tu modelo de usuarios
            $table->foreign('producto_id')->references('id')->on('productos'); // Ajusta esto según tu modelo de productosble->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrito');
    }
};
