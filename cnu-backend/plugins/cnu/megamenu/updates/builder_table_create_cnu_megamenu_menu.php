<?php namespace cnu\MegaMenu\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCnuMegamenuMenu extends Migration
{
    public function up()
    {
        Schema::create('cnu_megamenu_menu', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cnu_megamenu_menu');
    }
}
