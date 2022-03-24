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
        //criando a tabela participantes
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('cpf', 11);
            $table->string('vinculo', 20);
            $table->string('cargo',20);
            $table->string('setor', 20);
            $table->string('email',50);
            $table->timestamps();
        });

        //criando a tabela produto_filiais
        Schema::create('registro_participantes', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('participante_id');
            $table->unsignedBigInteger('evento_id');
            $table->timestamps();

            //foreign key(constraints)
            $table->foreign('participante_id')->references('id')->on('participantes');
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
        Schema::dropIfExists('registro_participantes');

        Schema::dropIfExists('participantes');
    }
};
