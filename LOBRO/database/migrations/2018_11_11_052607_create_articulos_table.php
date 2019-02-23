<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Articulo', function (Blueprint $table) {
            $table->increments('idArticulo');
            $table->string('Nombre_Art');
            $table->string('UnidadM_Art');
            $table->string('Categoria_Art');
            $table->decimal('Peso_Art', 8, 2);
            $table->decimal('Precio_Art', 8, 2);
            $table->integer('Cantidad_Art');
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
        Schema::dropIfExists('Articulo');
    }
}
