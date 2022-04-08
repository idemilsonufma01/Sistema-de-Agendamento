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
       //adicionando a coluna tipo_eventos_id
       Schema::table('eventos', function (Blueprint $table) {
            
        $table ->unsignedBigInteger('tipo_eventos_id');
        
    });

    //migrando dados de tipo_eventos para tipo_eventos_id
    DB::statement('update eventos set tipo_eventos_id = tipo_evento');

    //criando fk e remover a coluna tipo_eventos
    Schema::table('eventos', function (Blueprint $table) {
        $table ->foreign('tipo_eventos_id')->references('id')->on('tipo_eventos');
        $table ->dropColumn('tipo_evento');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //criar a coluna tipo_eventos e removendo a fk
        Schema::table('eventos', function (Blueprint $table) {
            $table ->integer('tipo_evento');
            $table ->dropForeign('eventos_tipo_eventos_id_foreign');
        });

        //migrando dados de tipo_eventos_id para tipo_eventos
        DB::statement('update eventos set tipo_eventos = tipo_eventos_id');

        //removendo a coluna tipo_evento_id
        Schema::table('eventos', function (Blueprint $table) {
            
            $table ->dropColumn('tipo_eventos_id');
            
        });
    }
};
