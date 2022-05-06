

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnunciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::create('anuncios', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('titulo', 100);
            $table->string('endereco', 300);
            $table->string('cep', 9);
            $table->string('bairro', 80);
            $table->string('univ');                             
            $table->integer('area_total');
            $table->integer('qtd_quartos');
            $table->integer('qtd_hospedes');
            $table->string('descricao');
            $table->double('preco',10,2);
            $table->string('image');
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
        Schema::dropIfExists('anuncios');
    }
}
