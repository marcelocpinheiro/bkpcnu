<?php namespace cnu\MainSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCnuMainsliderContent8 extends Migration
{
    public function up()
    {
        Schema::table('cnu_mainslider_content', function($table)
        {
            $table->integer('show_seconds')->default(5);
        });
    }
    
    public function down()
    {
        Schema::table('cnu_mainslider_content', function($table)
        {
            $table->dropColumn('show_seconds');
        });
    }
}
