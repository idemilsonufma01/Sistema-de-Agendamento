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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('data', 50);
            $table->string('nome', 50);
            $table->string('horario_inicio', 50);
            $table->string('horario_final', 50);
            $table->string('tipo_evento', 50);
            $table->string('email', 80);
            $table->string('telefone', 20);
        });

         //adicionar o relacionamento com a tabela registro_presencas

         Schema::table('registro__presencas', function(Blueprint $table){
            $table->unsignedBigInteger('evento_id');
            $table->foreign('evento_id')->references('id')->on('eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         //remover o relacionamento com a tabela registro__presencas
         Schema::table('registro__presencas', function(Blueprint $table){
            //remover FK
            $table->dropForeign('registro__presencas_evento_id_foreign'); //[table]_[column]_foreign
            //remover coluna evento_id
            $table->dropColumn('evento_id');
                
        });

        Schema::dropIfExists('eventos');
    }
};
