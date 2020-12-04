<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class RegistroPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_personal', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_instituciones')->unsigned();
            $table->integer('id_estado')->unsigned();
            $table->integer('id_municipio')->unsigned();
            $table->integer('id_parroquia')->unsigned();
            $table->integer('id_nucleo')->unsigned();
            $table->integer('id_tipo_personal')->unsigned();
            $table->integer('id_condicion_ingreso')->unsigned();
            $table->string('primer_nombre', 150);
            $table->string('segundo_nombre', 150)->nullable();
            $table->string('primer_apellido', 150);
            $table->string('segundo_apellido', 150)->nullable();
            $table->string('cedula', 20)->unique();
            $table->string('fecha_nacimiento',15);
            $table->integer('id_sexualidad')->unsigned();
            $table->integer('id_estado_civil')->unsigned();
            $table->string('fecha_ingreso',15);
            $table->string('fecha_egreso', 15);
            $table->string('correo_email', 255)->unique();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_instituciones')->references('id')->on('instituciones');
            $table->foreign('id_estado')->references('id')->on('estado');
            $table->foreign('id_municipio')->references('id')->on('municipios');
            $table->foreign('id_parroquia')->references('id')->on('parroquias');
            $table->foreign('id_nucleo')->references('id')->on('nucleos');
            $table->foreign('id_tipo_personal')->references('id')->on('tipo_personal');
            $table->foreign('id_condicion_ingreso')->references('id')->on('condicion_ingresos');
            $table->foreign('id_sexualidad')->references('id')->on('tipo_generos');
            $table->foreign('id_estado_civil')->references('id')->on('estado_civil');
            $table->string('status')->default('activo');
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
        Schema::dropIfExists('registro_personal');
    }
}