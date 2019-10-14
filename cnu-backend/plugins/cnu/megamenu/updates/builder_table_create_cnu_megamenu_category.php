<?php namespace cnu\MegaMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCnuMegamenuCategory extends Migration
{
    public function up()
    {
        Schema::create('cnu_megamenu_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('menu_id');
            $table->string('title');
            $table->boolean('has_url')->default(0);
            $table->string('url');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cnu_megamenu_category');
    }
}
