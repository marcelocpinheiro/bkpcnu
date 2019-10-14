<?php namespace cnu\Sessoes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCnuSessoesColumns extends Migration
{
    public function up()
    {
        Schema::create('cnu_sessoes_columns', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('section_id');
            $table->integer('component_id');
            $table->string('width')->default('auto');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cnu_sessoes_columns');
    }
}
