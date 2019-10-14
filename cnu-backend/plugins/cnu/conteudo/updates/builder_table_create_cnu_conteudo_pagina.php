<?php namespace cnu\Conteudo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCnuConteudoPagina extends Migration
{
    public function up()
    {
        Schema::create('cnu_conteudo_pagina', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('title');
            $table->string('route')->unique();
            $table->string('type');
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cnu_conteudo_pagina');
    }
}
