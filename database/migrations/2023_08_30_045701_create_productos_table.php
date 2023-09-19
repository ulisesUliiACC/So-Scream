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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->text('descripcion');
            $table->decimal('precio', 10, 2);
            $table->decimal('precio_socio', 10, 2);
            $table->integer('stock');
            $table->string('status')->default('Activo');
            $table->boolean('activo')->default(true);
            $table->date('fecha_activo');
            $table->date('fecha_limite');
            $table->string('imagen')->nullable(); // Puedes cambiar esto según cómo almacenes las imágenes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
