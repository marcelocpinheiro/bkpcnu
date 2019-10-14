<?php namespace cnu\AtalhosDaHome\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCnuAtalhosdahomeType extends Migration
{
    public function up()
    {
        Schema::create('cnu_atalhosdahome_type', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cnu_atalhosdahome_type');
    }
}
