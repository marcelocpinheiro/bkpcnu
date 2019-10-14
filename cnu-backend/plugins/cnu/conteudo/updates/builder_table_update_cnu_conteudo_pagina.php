<?php namespace cnu\Conteudo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCnuConteudoPagina extends Migration
{
    public function up()
    {
        Schema::table('cnu_conteudo_pagina', function($table)
        {
            $table->boolean('active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('cnu_conteudo_pagina', function($table)
        {
            $table->dropColumn('active');
        });
    }
}
