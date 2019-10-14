<?php namespace cnu\MegaMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCnuMegamenuItem extends Migration
{
    public function up()
    {
        Schema::create('cnu_megamenu_item', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('category_id')->default(0);
            $table->string('title')->default('item');
            $table->string('url');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cnu_megamenu_item');
    }
}
