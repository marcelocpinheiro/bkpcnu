<?php namespace cnu\Sessoes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCnuSessoesSection extends Migration
{
    public function up()
    {
        Schema::create('cnu_sessoes_section', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('section_name');
            $table->string('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cnu_sessoes_section');
    }
}
