<?php namespace cnu\Componentes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCnuComponentesContent extends Migration
{
    public function up()
    {
        Schema::create('cnu_componentes_content', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->boolean('show_title');
            $table->text('content');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cnu_componentes_content');
    }
}
