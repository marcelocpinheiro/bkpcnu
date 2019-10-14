<?php namespace cnu\MainSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCnuMainsliderContent extends Migration
{
    public function up()
    {
        Schema::create('cnu_mainslider_content', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->string('link');
            $table->boolean('active')->default(true);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cnu_mainslider_content');
    }
}
