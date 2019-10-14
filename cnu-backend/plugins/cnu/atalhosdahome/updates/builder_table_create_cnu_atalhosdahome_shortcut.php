<?php namespace cnu\AtalhosDaHome\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCnuAtalhosdahomeShortcut extends Migration
{
    public function up()
    {
        Schema::create('cnu_atalhosdahome_shortcut', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->string('icon');
            $table->string('background_color');
            $table->string('link');
            $table->boolean('active')->default(1);
            $table->integer('type_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cnu_atalhosdahome_shortcut');
    }
}
