<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelacionarMarcaProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Aqui vou relacionar tabela produto com a tabela marca
        Schema::table('produtos', function (Blueprint $table){
            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Aqui é quando eu quero desfazer ou reverter
        Schema::table('produtos',function (Blueprint $table){
            $table->dropForeign('produtos_marca_id_foreign');
           $table->dropColumn('marca_id');
        });
    }
}
