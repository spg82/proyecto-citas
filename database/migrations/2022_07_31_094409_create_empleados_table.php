<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('especialidad_id')->unsigned();
            $table->date('fecha_incorporacion');
            $table->enum('calle',['calle','avenida','plaza']);
            $table->string('nombre');
            $table->integer('numero')->unsigned();
            $table->integer('piso')->unsigned();
            $table->string('letra',2)->nullable(true);
            $table->integer('cp')->unsigned();
            $table->string('localidad');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('especialidad_id')->references('id')->on('especialidads')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
