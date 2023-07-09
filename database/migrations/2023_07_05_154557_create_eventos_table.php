<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //crea una nueva tabla llamada eventos con los parametros
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string("title", 255);
            $table->text("descripcion");
        
            $table->dateTime("start");
            $table->time("hora"); // Cambio de nombre y tipo de dato
        
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
        Schema::dropIfExists('eventos');
    }
}
